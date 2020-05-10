<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <section class="pay-area">
        <div>
            {{-- <img height="60" src="{{ asset('paypal-logo.png') }}"> --}}
            @if (session('error') || session('success'))
            <p class="{{ session('error') ? 'error':'success' }}">
                {{ session('error') ?? session('success') }}
            </p>
            @endif
            <form method="POST" action="{{ route('create-payment') }}">
                @csrf
                <div class="m-2">
                    <input type="text" name="amount" placeholder="Amount">
                    @if ($errors->has('amount'))
                    <span class="error"> {{ $errors->first('amount') }} </span>
                    @endif
                </div>
                <button>Pay Now</button>
            </form>
        </div>
    </section>

</body>

</html>