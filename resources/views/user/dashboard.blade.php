@extends('layouts.app')

@section('content')
    {{$checkouts}}
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                        </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{ $checkout->Camp->title }}</strong>
                                    </p>
                                    <p>
                                        @if ($checkout && $checkout->created_at)
                                            {{ $checkout->created_at->format('M d, Y') }}
                                        @else
                                            N/A or some default value
                                        @endif
                                    </p>
                                </td>
                                <td>
                                    <strong>$ {{ $checkout->Camp->price }}k</strong>
                                </td>
                                <td>
                                    @if($checkout->is_paid)
                                        <strong class="text-green">Payment Success</strong>
                                    @else
                                        <strong class="text-red">Waiting for Payment</strong>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/088292822882?text=Hello, i want ask for class{{ $checkout->Camp->title }}" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Data</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
