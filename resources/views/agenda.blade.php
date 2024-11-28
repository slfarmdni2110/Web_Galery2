{{-- resources/views/agenda.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!-- Menambahkan link ke Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv3Jt8p+KnujsXYVd7Eg0QmAbGByHmkz03wbWV9f1mCSgGGfBbnT0yqaxl6" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0066cc;
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            margin-top: 40px;
        }

        .agenda-container {
            margin: 0 auto;
            max-width: 1200px;
            padding: 40px;
        }

        .agenda-container ul {
            list-style: none;
            padding: 0;
        }

        .agenda-container li {
            background-color: #ffffff;
            margin-bottom: 30px;
            border: 2px solid #0066cc; /* Menambahkan border untuk kotak */
            border-radius: 0px; /* Menghilangkan sudut melengkung */
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .agenda-container li:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .agenda-container li h2 {
            font-size: 28px;
            color: #0066cc;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .agenda-container li p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
        }

        .agenda-container li small {
            font-size: 16px;
            color: #888;
        }

        .agenda-container li .post-meta {
            margin-top: 15px;
            font-size: 15px;
            color: #777;
        }

        .no-agenda {
            text-align: center;
            font-size: 22px;
            color: #ff5555;
            font-weight: bold;
            padding: 50px;
        }

        .btn-custom {
            background-color: #0066cc;
            color: white;
            border-radius: 6px;
            padding: 12px 25px;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0055b3;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 28px;
            }

            .agenda-container {
                padding: 20px;
            }

            .agenda-container li {
                padding: 20px;
            }

            .agenda-container li h2 {
                font-size: 24px;
            }

            .agenda-container li p {
                font-size: 16px;
            }
        }

    </style>
</head>
<body>

    <header>
        <h1>Agenda Kegiatan</h1>
    </header>

    <main>
        <div class="agenda-container">
            @if($posts->isEmpty())
                <p class="no-agenda">Tidak ada agenda untuk saat ini.</p>
            @else
                <ul>
                    @foreach($posts as $post)
                        <li>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ Str::limit($post->description, 250) }}</p> <!-- Memperpanjang tampilan deskripsi -->
                            <div class="post-meta">
                                <small><strong>Diposting pada:</strong> {{ $post->created_at->format('d M Y') }}</small>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            <a href="{{ url('/') }}" class="btn-custom">Kembali ke Beranda</a> <!-- Tombol kembali ke beranda -->
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SMK Negeri 4 Bogor. All rights reserved.</p>
    </footer>

    <!-- Menambahkan link ke Bootstrap JS untuk fungsionalitas interaktif (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0r5s9cZNS2qGyvxa6bh1gqsbUs5avjp58ZYdX0mB1gsr8GfS" crossorigin="anonymous"></script>
</body>
</html>
