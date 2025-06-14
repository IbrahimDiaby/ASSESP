<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Arizonia%7COpen+Sans:300,300i,400,400i,600,700,800%7CRoboto:300,400,500,700"
        rel="stylesheet">
    <style type="text/tailwindcss">
        @theme {
        --color-clifford: #da373d;
      }
    </style>
    <title>Dashboard</title>
</head>
<?php
$urls = [
    [
        "path" => ["/admin", "/admin/index.php"],
        "label" => "Acceuil",
    ],
    [
        "path" => ["/admin/about.php"],
        "label" => "À propos",
    ],
    [
        "path" => ["/admin/events.php"],
        "label" => "Évenements",
    ],
    [
        "path" => ["/admin/gallery.php"],
        "label" => "Gallerie",
    ],
    [
        "path" => ["/admin/contact.php"],
        "label" => "Contact",
    ]
];

$n = count($urls);
?>

<body>

    <div class="flex flex-col w-full min-h-screen">
        <nav class="flex px-4 bg-green-400 h-20 justify-end shadow-lg shadow-slate-300">
            <div class="">
                <div
                    class="flex lg:hidden drawer-btn transition transform delay-75 duration-1000 cursor-pointer hover:scale-150 absolute top-5 left-10">
                    <i class="scale-300 fa fa-bars text-lg text-white" aria-hidden="true"></i>
                </div>
                <div
                    class="hidden lg:flex size-20 drawer-btn transition transform delay-75 duration-1000 cursor-pointer hover:scale-150 absolute top-5 left-10">
                    <div class="logo">
                        <a href="/admin"><img src="/images/logo-assesp.png" alt="ASSESP" class="img-responsive"></a>
                        <!-- <a class="text-uppercase text-white text-logo font-bold" href="/">ASSESP</a> -->
                    </div>
                </div>
            </div>
            <ul class="hidden min-w-1/2 lg:flex">
                <?php
                for ($i = 0; $i < $n; $i++) {
                    ?>
                    <li
                        class="flex w-full items-center justify-center font-bold my-4 px-6 <?php echo ((count($urls[$i]["path"]) == 1) ? strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][0]) === 0 : (strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][0]) === 0 || strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][1]) === 0)) ? "flex bg-white w-full rounded-sm shadow-lg shadow-white" : "" ?>">
                        <a href="<?php echo $urls[$i]["path"][0]; ?>"><?php echo strtoupper($urls[$i]["label"]); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <aside
            class="flex lg:hidden z-10 drawer transition transform delay-75 duration-1000 fixed -translate-x-300 lg:-translate-x-100 flex flex-col justify-center items-center left-0 w-screen h-screen bg-green-600 text-color lg:w-60 shadow-lg">
            <div
                class="drawer-btn transition transform delay-75 duration-1000 cursor-pointer hover:scale-150 absolute top-5 right-8">
                <i class="scale-300 fa fa-times text-lg text-red-500" aria-hidden="true"></i>
            </div>
            <nav class="flex w-full">
                <ul class="flex flex-col w-full ps-4">
                    <?php
                    for ($i = 0; $i < $n; $i++) {
                        $id = $i;
                        ?>
                        <li
                            class="font-bold py-4 ps-2 <?php echo ((count($urls[$i]["path"]) == 1) ? strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][0]) === 0 : (strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][0]) === 0 || strcmp(strtolower($_SERVER["REQUEST_URI"]), $urls[$i]["path"][1]) === 0)) ? "flex bg-white pe-4 w-full rounded-tl-sm rounded-bl-sm shadow-lg shadow-white" : "" ?>">
                            <a href="<?php echo $urls[$i]["path"][0]; ?>"><?php echo strtoupper($urls[$i]["label"]); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </aside>
        <div class="px-10 flex w-full flex-col gap-y-4">
            <section class="flex py-10 gap-y-4 relative justify-center items-center overflow-x-auto">
                <div class="w-full md:max-w-xl">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nom d'utilisateur
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username" type="text" placeholder="admin33">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
                                Prénom
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="firstname" type="text" placeholder="Abdallah">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                                Nom
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="lastname" type="text" placeholder="Diop">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="text" placeholder="contact@gmail.com">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Mot de passe
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder="*************" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password2">
                                Confirmation de mot de passe
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password2" name="password2" type="password" placeholder="*************" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                                Photo de profil
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="image" name="image" type="file" placeholder="fichier" required>
                        </div>

                        <div class="flex justify-center items-center mb-4">
                            <img src="/images/placeholder.jpg" class="max-h-50 " alt="Photo de profil" srcset="/images/placeholder.jpg">
                        </div>
                        <div class="mb-4">
                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-green-500 cursor-pointer hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="button">
                                    Valider
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <script src="../js/custom.js"></script>
</body>

</html>