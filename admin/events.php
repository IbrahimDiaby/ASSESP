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
<body>
    <?php include_once(__DIR__."/config/constants.php"); ?>
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
            <section class="my-10 relative items-center overflow-x-auto">
                <div class="flex justify-end my-4 font-bold">
                    <div class="mb-4">
                        <a href="/admin/events/add.php"
                            class="transition text-white transform delay-75 duration-700 cursor-pointer py-4 text-lg px-4 bg-green-400 uppercase rounded-sm border-1 border-green-400 hover:bg-white hover:text-green-400"><i
                                class="fa fa-plus"></i> Ajouter</a>
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Titre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 7; $i++) {
                            ?>
                            <tr class="bg-white py-4 h-30 dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td class="px-6 py-4">Index</td>
                                <td class="px-6 py-4">Image</td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Username
                                </th>
                                <td class="px-6 py-4">Role</td>
                                <td class="px-6 py-4">Date</td>
                                <td class="px-6 py-4">
                                    <i class="px-2 fa fa-eye cursor-pointer text-lg text-sky-400"></i>
                                    <i class="px-2 fa fa-edit cursor-pointer text-lg text-green-400"></i>
                                    <i class="px-2 fa fa-trash cursor-pointer text-lg text-red-400"></i>
                                    <!-- <span
                                        class="transition delay-75 transform duration-1000 hover:scale-105 px-4 py-2 bg-sky-400 text-white cursor-pointer">Voir</span>
                                    <span
                                        class="transition delay-75 transform duration-1000 hover:scale-105 px-4 py-2 bg-green-400 text-white cursor-pointer">Modifier</span>
                                    <span
                                        class="transition delay-75 transform duration-1000 hover:scale-105 px-4 py-2 bg-red-400 text-white cursor-pointer">Supprimer</span> -->
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </section>

            <!-- <section class="">
                <p
                    class="flex font-bold ms-15 text-red-600 transition delay-75 duration-1000 hover:bg-green-100 items-center justify-center ps-3 gap-x-2 min-w-fit min-h-20 lg:ms-0 ">
                    Aucun utilisateur n'existe dans la base de données
                </p>
            </section> -->
        </div>

        <script src="../js/custom.js"></script>
</body>

</html>