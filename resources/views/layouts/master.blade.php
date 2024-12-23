<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Website Hengky</h1>
        <nav>
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Website Saya</p>
    </footer>
</body>

<style>
    /* Global Styles */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #ffffff; /* Mengubah warna font menjadi putih */
  background: #3B484F;
}

/* Header Styles */

header {
  background: #86423E; /* Menambahkan titik koma yang hilang */
  color: #ffffff; /* Warna font header menjadi putih */
  padding: 2em 0;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

header h1 {
  margin: 0;
  color: #ffffff; /* Mengubah warna font menjadi putih */
  font-size: 3em;
  text-transform: uppercase;
  letter-spacing: 2px;
}

nav {
  margin-top: 1em;
}

nav a {
  color: #ffffff; /* Mengubah warna font tautan menjadi putih */
  text-decoration: none;
  margin: 0 2em;
  font-weight: bold;
  padding: 0.5em 1em;
  border-radius: 5px;
  /* transition: background 0.3s, color 0.3s; */
}

nav a:hover {
  background: rgba(255, 255, 255, 0.3); /* Latar belakang transparan saat hover */
  color: #333; /* Warna teks gelap saat hover */
}

/* Main Styles */

main {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 3em;
  background: #D0C0AC;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  margin: 2em auto;
  max-width: 800px;
}

main h2 {
  font-size: 2em;
  margin-bottom: 1em;
  color: #ffffff; /* Mengubah warna font menjadi putih */
}

/* Footer Styles */

footer {
  background-color: #333;
  color: #ffffff; /* Mengubah warna font footer menjadi putih */
  padding: 1.5em;
  text-align: center;
  position: relative;
  bottom: 0;
  width: 100%;
  box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
}

footer p {
  margin: 0;
  font-size: 0.9em;
}

/* Responsive Styles */

@media (max-width: 600px) {
  nav a {
    margin: 0 1em;
    font-size: 0.9em;
  }

  header h1 {
    font-size: 2.5em;
  }

  main {
    padding: 2em;
  }
}
</style>
</html>