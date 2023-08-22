



<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        .success-icon {
            color: #28a745;
            font-size: 48px;
        }
        h1 {
            color: #333;
            font-size: 28px;
            margin: 20px 0;
        }
        p {
            color: #777;
            font-size: 18px;
            line-height: 1.5;
        }
        .btn-container {
            margin-top: 30px;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="success-icon">&#10004;</div>
        <h1>Payment Successful!</h1>
        <p>Thank you for your payment. Your order has been processed successfully.</p>
        <div class="btn-container">
            <a href="{{ route('home') }}" class="btn">Explore More</a>
        </div>
    </div>
</body>
</html>
