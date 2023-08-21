@extends('layouts.app')

@section('content')
    <section>
        <h1>
            Package
        </h1>
        <details>
            <summary>Pokhara</summary>
            <p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Package</th>
                        <th scope="col">Price</th>

                        <th scope="col">Days</th>

                        <th scope="col">Inclusion</th>

                        <th scope="col">Conclusion</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kathmandu - Pokhara</td>
                        <td>Rs. 2500</td>
                        <td>4N/ 5D</td>
                        <td>Hotel, Meal, Car</td>
                        <td><button class="success">Book Now</button></td>
                    </tr>
                </tbody>
            </table>
            </p>
        </details>
    </section>

    <style>
        html,
        .root {
            padding: 0;
            margin: 0;
            font-size: 18px;
        }

        body {
            font: menu;
            font-size: 1rem;
            line-height: 1.4;
            padding: 0;
            margin: 0;
        }

        section {
            padding-top: 4rem;
            width: 50%;
            margin: auto;
        }

        h1 {
            font-size: 2rem;
            font-weight: 500;
        }

        details[open] summary~* {
            animation: open 0.3s ease-in-out;
        }

        @keyframes open {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        details summary::-webkit-details-marker {
            display: none;
        }

        details summary {
            width: 100%;
            padding: 0.5rem 0;
            border-top: 1px solid black;
            position: relative;
            cursor: pointer;
            font-size: 1.25rem;
            font-weight: 300;
            list-style: none;
        }

        details summary:after {
            content: "+";
            color: black;
            position: absolute;
            font-size: 1.75rem;
            line-height: 0;
            margin-top: 0.75rem;
            right: 0;
            font-weight: 200;
            transform-origin: center;
            transition: 200ms linear;
        }

        details[open] summary:after {
            transform: rotate(45deg);
            font-size: 2rem;
        }

        details summary {
            outline: 0;
        }

        details p {
            font-size: 0.95rem;
            margin: 0 0 1rem;
            padding-top: 1rem;
        }
    </style>
@endsection
