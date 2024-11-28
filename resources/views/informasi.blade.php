{{-- resources/views/informasi.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Terkini</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Umum */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background-color: #004a99;
            color: white;
            text-align: center;
            padding: 3rem 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            margin: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: bold;
        }

        /* Container utama informasi */
        .informasi-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            transition: all 0.3s ease;
            margin-top: 2rem;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.8s ease-out forwards;
        }

        .informasi-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .informasi-container ul {
            list-style-type: none;
            padding: 0;
        }

        .informasi-container li {
            border-bottom: 1px solid #ddd;
            padding: 1.5rem 0;
            transition: transform 0.3s ease;
        }

        .informasi-container li:hover {
            transform: translateX(10px);
            background-color: #f9f9f9;
        }

        .informasi-container h2 {
            color: #004a99;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .informasi-container p {
            color: #555;
            font-size: 1.1rem;
            margin: 0.5rem 0;
            line-height: 1.6;
        }

        .informasi-container small {
            display: block;
            margin-top: 0.5rem;
            color: #888;
            font-size: 0.9rem;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1.5rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        /* Tombol kembali ke beranda */
        .btn-back {
            display: inline-block;
            background-color: #004a99;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 2rem;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #003366;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }

            .informasi-container {
                padding: 1.5rem;
            }

            .informasi-container h2 {
                font-size: 1.5rem;
            }

            .informasi-container p {
                font-size: 1rem;
            }

            footer {
                padding: 1rem;
            }
        }

        /* Animasi slide-in dari bawah */
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Informasi Terkini</h1>
    </header>

    <main>
        <div class="informasi-container">
            @if($posts->isEmpty())
                <p>Tidak ada informasi terkini yang tersedia.</p>
            @else
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ Str::limit($post->content, 150) }}</p>
                            <small><strong>Diposting pada:</strong> {{ $post->created_at->format('d M Y') }}</small>
                        </li>
                    @endforeach
                </ul>
            @endif

            <!-- Tombol untuk kembali ke beranda -->
            <a href="{{ url('/') }}" class="btn-back">Kembali ke Beranda</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SMK Negeri 4 Bogor. All rights reserved.</p>
    </footer>
</body>
</html>
