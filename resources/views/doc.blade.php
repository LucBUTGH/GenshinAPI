<head>
    <meta charset="UTF-8">
    <title>L5 Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/docs/asset/swagger-ui.css?v=3fb53292764c7c9a0ee0928832bfbe54">
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6" sizes="32x32">
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384" sizes="16x16">
    <style>
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
    </style>
</head>

<body>
<div id="swagger-ui"><section class="swagger-ui swagger-container"><div class="topbar"><div class="wrapper"><div class="topbar-wrapper"><a rel="noopener noreferrer" class="link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407 116" height="40"><defs><clipPath id="logo_small_svg__clip-SW_TM-logo-on-dark"><path d="M0 0h407v116H0z"></path></clipPath><style>.logo_small_svg__cls-2{fill:#fff}.logo_small_svg__cls-3{fill:#85ea2d}</style></defs><g id="logo_small_svg__SW_TM-logo-on-dark" style="clip-path: url(&quot;#logo_small_svg__clip-SW_TM-logo-on-dark&quot;);"><g id="logo_small_svg__SW_In-Product" transform="translate(-.301)"><path id="logo_small_svg__Path_2936" d="M359.15 70.674h-.7v-3.682h-1.26v-.6h3.219v.6h-1.259Z" class="logo_small_svg__cls-2" data-name="Path 2936"></path><path id="logo_small_svg__Path_2937" d="m363.217 70.674-1.242-3.574h-.023q.05.8.05 1.494v2.083h-.636v-4.286h.987l1.19 3.407h.017l1.225-3.407h.99v4.283h-.675v-2.118a30 30 0 0 1 .044-1.453h-.023l-1.286 3.571Z" class="logo_small_svg__cls-2" data-name="Path 2937"></path><path id="logo_small_svg__Path_2938" d="M50.328 97.669a47.642 47.642 0 1 1 47.643-47.642 47.64 47.64 0 0 1-47.643 47.642" class="logo_small_svg__cls-3" data-name="Path 2938"></path><path id="logo_small_svg__Path_2939" d="M50.328 4.769A45.258 45.258 0 1 1 5.07 50.027 45.26 45.26 0 0 1 50.328 4.769m0-4.769a50.027 50.027 0 1 0 50.027 50.027A50.027 50.027 0 0 0 50.328 0" class="logo_small_svg__cls-3" data-name="Path 2939"></path><path id="logo_small_svg__Path_2940" d="M31.8 33.854c-.154 1.712.058 3.482-.057 5.213a43 43 0 0 1-.693 5.156 9.53 9.53 0 0 1-4.1 5.829c4.079 2.654 4.54 6.771 4.81 10.946.135 2.25.077 4.52.308 6.752.173 1.731.846 2.174 2.636 2.231.73.02 1.48 0 2.327 0v5.349c-5.29.9-9.657-.6-10.734-5.079a31 31 0 0 1-.654-5c-.117-1.789.076-3.578-.058-5.367-.386-4.906-1.02-6.56-5.713-6.791v-6.1a9 9 0 0 1 1.028-.173c2.577-.135 3.674-.924 4.231-3.463a29 29 0 0 0 .481-4.329 82 82 0 0 1 .6-8.406c.673-3.982 3.136-5.906 7.234-6.137 1.154-.057 2.327 0 3.655 0v5.464c-.558.038-1.039.115-1.539.115-3.336-.115-3.51 1.02-3.762 3.79m6.406 12.658h-.077a3.515 3.515 0 1 0-.346 7.021h.231a3.46 3.46 0 0 0 3.655-3.251v-.192a3.523 3.523 0 0 0-3.461-3.578Zm12.062 0a3.373 3.373 0 0 0-3.482 3.251 2 2 0 0 0 .02.327 3.3 3.3 0 0 0 3.578 3.443 3.263 3.263 0 0 0 3.443-3.558 3.308 3.308 0 0 0-3.557-3.463Zm12.351 0a3.59 3.59 0 0 0-3.655 3.482 3.53 3.53 0 0 0 3.536 3.539h.039c1.769.309 3.559-1.4 3.674-3.462a3.57 3.57 0 0 0-3.6-3.559Zm16.948.288c-2.232-.1-3.348-.846-3.9-2.962a21.5 21.5 0 0 1-.635-4.136c-.154-2.578-.135-5.175-.308-7.753-.4-6.117-4.828-8.252-11.254-7.195v5.31c1.019 0 1.808 0 2.6.019 1.366.019 2.4.539 2.539 2.059.135 1.385.135 2.789.27 4.193.269 2.79.422 5.618.9 8.369a8.72 8.72 0 0 0 3.921 5.348c-3.4 2.289-4.406 5.559-4.578 9.234-.1 2.52-.154 5.059-.289 7.6-.115 2.308-.923 3.058-3.251 3.116-.654.019-1.289.077-2.019.115v5.445c1.365 0 2.616.077 3.866 0 3.886-.231 6.233-2.117 7-5.887A49 49 0 0 0 75 63.4c.135-1.923.116-3.866.308-5.771.289-2.982 1.655-4.213 4.636-4.4a4 4 0 0 0 .828-.192v-6.1c-.5-.058-.843-.115-1.208-.135Z" data-name="Path 2940" style="fill: rgb(23, 54, 71);"></path><path id="logo_small_svg__Path_2941" d="M152.273 58.122a11.23 11.23 0 0 1-4.384 9.424q-4.383 3.382-11.9 3.382-8.14 0-12.524-2.1V63.7a33 33 0 0 0 6.137 1.879 32.3 32.3 0 0 0 6.575.689q5.322 0 8.015-2.02a6.63 6.63 0 0 0 2.692-5.62 7.2 7.2 0 0 0-.954-3.9 8.9 8.9 0 0 0-3.194-2.8 44.6 44.6 0 0 0-6.81-2.911q-6.387-2.286-9.126-5.417a11.96 11.96 0 0 1-2.74-8.172A10.16 10.16 0 0 1 128.039 27q3.977-3.131 10.52-3.131a31 31 0 0 1 12.555 2.5L149.455 31a28.4 28.4 0 0 0-11.021-2.38 10.67 10.67 0 0 0-6.606 1.816 5.98 5.98 0 0 0-2.38 5.041 7.7 7.7 0 0 0 .877 3.9 8.24 8.24 0 0 0 2.959 2.786 36.7 36.7 0 0 0 6.371 2.8q7.2 2.566 9.91 5.51a10.84 10.84 0 0 1 2.708 7.649" class="logo_small_svg__cls-2" data-name="Path 2941"></path><path id="logo_small_svg__Path_2942" d="M185.288 70.3 179 50.17q-.594-1.848-2.222-8.391h-.251q-1.252 5.479-2.192 8.453L167.849 70.3h-6.011l-9.361-34.315h5.447q3.318 12.931 5.057 19.693a80 80 0 0 1 1.988 9.111h.25q.345-1.785 1.112-4.618t1.33-4.493l6.294-19.693h5.635l6.137 19.693a66 66 0 0 1 2.379 9.048h.251a33 33 0 0 1 .673-3.475q.548-2.347 6.528-25.266h5.385L191.456 70.3Z" class="logo_small_svg__cls-2" data-name="Path 2942"></path><path id="logo_small_svg__Path_2943" d="m225.115 70.3-1.033-4.885h-.25a14.45 14.45 0 0 1-5.119 4.368 15.6 15.6 0 0 1-6.372 1.143q-5.1 0-8-2.63t-2.9-7.483q0-10.4 16.626-10.9l5.823-.188V47.6q0-4.038-1.738-5.964t-5.552-1.923a22.6 22.6 0 0 0-9.706 2.63l-1.6-3.977a24.4 24.4 0 0 1 5.557-2.16 24 24 0 0 1 6.058-.783q6.136 0 9.1 2.724t2.959 8.735V70.3Zm-11.741-3.663a10.55 10.55 0 0 0 7.626-2.66 9.85 9.85 0 0 0 2.771-7.451v-3.1l-5.2.219q-6.2.219-8.939 1.926a5.8 5.8 0 0 0-2.74 5.306 5.35 5.35 0 0 0 1.707 4.29 7.08 7.08 0 0 0 4.775 1.472Z" class="logo_small_svg__cls-2" data-name="Path 2943"></path><path id="logo_small_svg__Path_2944" d="M264.6 35.987v3.287l-6.356.752a11.16 11.16 0 0 1 2.255 6.856 10.15 10.15 0 0 1-3.444 8.047q-3.444 3-9.456 3a15.7 15.7 0 0 1-2.88-.25Q241.4 59.438 241.4 62.1a2.24 2.24 0 0 0 1.159 2.082 8.46 8.46 0 0 0 3.976.673h6.074q5.573 0 8.563 2.348a8.16 8.16 0 0 1 2.99 6.825 9.74 9.74 0 0 1-4.571 8.688q-4.572 2.989-13.338 2.99-6.732 0-10.379-2.5a8.09 8.09 0 0 1-3.647-7.076 7.95 7.95 0 0 1 2-5.417 10.2 10.2 0 0 1 5.636-3.1 5.43 5.43 0 0 1-2.207-1.847 4.9 4.9 0 0 1-.893-2.912 5.53 5.53 0 0 1 1-3.288 10.5 10.5 0 0 1 3.162-2.723 9.28 9.28 0 0 1-4.336-3.726 10.95 10.95 0 0 1-1.675-6.012q0-5.634 3.382-8.688t9.58-3.052a17.4 17.4 0 0 1 4.853.626Zm-27.367 40.075a4.66 4.66 0 0 0 2.348 4.227 12.97 12.97 0 0 0 6.732 1.44q6.543 0 9.69-1.956a5.99 5.99 0 0 0 3.147-5.307q0-2.787-1.723-3.867t-6.481-1.08h-6.23a8.2 8.2 0 0 0-5.51 1.69 6.04 6.04 0 0 0-1.973 4.853m2.818-29.086a6.98 6.98 0 0 0 2.035 5.448 8.12 8.12 0 0 0 5.667 1.847q7.608 0 7.608-7.389 0-7.733-7.7-7.733a7.63 7.63 0 0 0-5.635 1.972q-1.976 1.973-1.975 5.855" class="logo_small_svg__cls-2" data-name="Path 2944"></path><path id="logo_small_svg__Path_2945" d="M299.136 35.987v3.287l-6.356.752a11.17 11.17 0 0 1 2.254 6.856 10.15 10.15 0 0 1-3.444 8.047q-3.444 3-9.455 3a15.7 15.7 0 0 1-2.88-.25q-3.32 1.754-3.319 4.415a2.24 2.24 0 0 0 1.158 2.082 8.46 8.46 0 0 0 3.976.673h6.074q5.574 0 8.563 2.348a8.16 8.16 0 0 1 2.99 6.825 9.74 9.74 0 0 1-4.571 8.688q-4.57 2.989-13.337 2.99-6.732 0-10.379-2.5a8.09 8.09 0 0 1-3.648-7.076 7.95 7.95 0 0 1 2-5.417 10.2 10.2 0 0 1 5.636-3.1 5.43 5.43 0 0 1-2.208-1.847 4.9 4.9 0 0 1-.892-2.912 5.53 5.53 0 0 1 1-3.288 10.5 10.5 0 0 1 3.162-2.723 9.27 9.27 0 0 1-4.336-3.726 10.95 10.95 0 0 1-1.675-6.012q0-5.634 3.381-8.688t9.581-3.052a17.4 17.4 0 0 1 4.853.626Zm-27.364 40.075a4.66 4.66 0 0 0 2.348 4.227 12.97 12.97 0 0 0 6.731 1.44q6.544 0 9.691-1.956a5.99 5.99 0 0 0 3.146-5.307q0-2.787-1.722-3.867t-6.481-1.08h-6.23a8.2 8.2 0 0 0-5.511 1.69 6.04 6.04 0 0 0-1.972 4.853m2.818-29.086a6.98 6.98 0 0 0 2.035 5.448 8.12 8.12 0 0 0 5.667 1.847q7.607 0 7.608-7.389 0-7.733-7.7-7.733a7.63 7.63 0 0 0-5.635 1.972q-1.975 1.973-1.975 5.855" class="logo_small_svg__cls-2" data-name="Path 2945"></path><path id="logo_small_svg__Path_2946" d="M316.778 70.928q-7.608 0-12.007-4.634t-4.4-12.868q0-8.3 4.086-13.181a13.57 13.57 0 0 1 10.974-4.884 12.94 12.94 0 0 1 10.207 4.239q3.762 4.247 3.762 11.2v3.287h-23.643q.156 6.044 3.053 9.174t8.156 3.131a27.6 27.6 0 0 0 10.958-2.317v4.634a27.5 27.5 0 0 1-5.213 1.706 29.3 29.3 0 0 1-5.933.513m-1.409-31.215a8.49 8.49 0 0 0-6.591 2.692 12.4 12.4 0 0 0-2.9 7.452h17.94q0-4.916-2.191-7.53a7.71 7.71 0 0 0-6.258-2.614" class="logo_small_svg__cls-2" data-name="Path 2946"></path><path id="logo_small_svg__Path_2947" d="M350.9 35.361a20.4 20.4 0 0 1 4.1.375l-.721 4.822a17.7 17.7 0 0 0-3.757-.47 9.14 9.14 0 0 0-7.122 3.382 12.33 12.33 0 0 0-2.959 8.422V70.3h-5.2V35.987h4.29l.6 6.356h.25a15.1 15.1 0 0 1 4.6-5.166 10.36 10.36 0 0 1 5.919-1.816" class="logo_small_svg__cls-2" data-name="Path 2947"></path><path id="logo_small_svg__Path_2948" d="M255.857 96.638s-3.43-.391-4.85-.391c-2.058 0-3.111.735-3.111 2.18 0 1.568.882 1.935 3.748 2.719 3.527.98 4.8 1.911 4.8 4.777 0 3.675-2.3 5.267-5.61 5.267a36 36 0 0 1-5.487-.662l.27-2.18s3.306.441 5.046.441c2.082 0 3.037-.931 3.037-2.7 0-1.421-.759-1.91-3.331-2.523-3.626-.93-5.193-2.033-5.193-4.948 0-3.381 2.229-4.776 5.585-4.776a37 37 0 0 1 5.315.587Z" class="logo_small_svg__cls-2" data-name="Path 2948"></path><path id="logo_small_svg__Path_2949" d="M262.967 94.14h4.733l3.748 13.106L275.2 94.14h4.752v16.78H277.2v-14.5h-.145l-4.191 13.816h-2.842l-4.191-13.816h-.145v14.5h-2.719Z" class="logo_small_svg__cls-2" data-name="Path 2949"></path><path id="logo_small_svg__Path_2950" d="M322.057 94.14H334.3v2.425h-4.728v14.355h-2.743V96.565h-4.777Z" class="logo_small_svg__cls-2" data-name="Path 2950"></path><path id="logo_small_svg__Path_2951" d="M346.137 94.14c3.332 0 5.12 1.249 5.12 4.361 0 2.033-.637 3.037-1.984 3.772 1.445.563 2.4 1.592 2.4 3.9 0 3.43-2.081 4.752-5.339 4.752h-6.566V94.14Zm-3.65 2.352v4.8h3.6c1.666 0 2.4-.832 2.4-2.474 0-1.617-.833-2.327-2.5-2.327Zm0 7.1v4.973h3.7c1.689 0 2.694-.539 2.694-2.548 0-1.911-1.421-2.425-2.744-2.425Z" class="logo_small_svg__cls-2" data-name="Path 2951"></path><path id="logo_small_svg__Path_2952" d="M358.414 94.14H369v2.377h-7.864v4.751h6.394v2.332h-6.394v4.924H369v2.4h-10.586Z" class="logo_small_svg__cls-2" data-name="Path 2952"></path><path id="logo_small_svg__Path_2953" d="M378.747 94.14h5.414l4.164 16.78h-2.744l-1.239-4.92h-5.777l-1.239 4.923h-2.719Zm.361 9.456h4.708l-1.737-7.178h-1.225Z" class="logo_small_svg__cls-2" data-name="Path 2953"></path><path id="logo_small_svg__Path_2954" d="M397.1 105.947v4.973h-2.719V94.14h6.37c3.7 0 5.683 2.12 5.683 5.843 0 2.376-.956 4.519-2.744 5.352l2.769 5.585h-2.989l-2.426-4.973Zm3.651-9.455H397.1v7.1h3.7c2.057 0 2.841-1.85 2.841-3.589 0-1.9-.934-3.511-2.894-3.511Z" class="logo_small_svg__cls-2" data-name="Path 2954"></path><path id="logo_small_svg__Path_2955" d="M290.013 94.14h5.413l4.164 16.78h-2.743l-1.239-4.92h-5.777l-1.239 4.923h-2.719Zm.361 9.456h4.707l-1.737-7.178h-1.225Z" class="logo_small_svg__cls-2" data-name="Path 2955"></path><path id="logo_small_svg__Path_2956" d="M308.362 105.947v4.973h-2.719V94.14h6.369c3.7 0 5.683 2.12 5.683 5.843 0 2.376-.955 4.519-2.743 5.352l2.768 5.585h-2.989l-2.425-4.973Zm3.65-9.455h-3.65v7.1h3.7c2.058 0 2.841-1.85 2.841-3.589-.003-1.903-.931-3.511-2.891-3.511" class="logo_small_svg__cls-2" data-name="Path 2956"></path><path id="logo_small_svg__Path_2957" d="M130.606 107.643a3.02 3.02 0 0 1-1.18 2.537 5.1 5.1 0 0 1-3.2.91 8 8 0 0 1-3.371-.564v-1.383a9 9 0 0 0 1.652.506 8.7 8.7 0 0 0 1.77.186 3.57 3.57 0 0 0 2.157-.544 1.78 1.78 0 0 0 .725-1.512 1.95 1.95 0 0 0-.257-1.05 2.4 2.4 0 0 0-.86-.754 12 12 0 0 0-1.833-.784 5.84 5.84 0 0 1-2.456-1.458 3.2 3.2 0 0 1-.738-2.2 2.74 2.74 0 0 1 1.071-2.267 4.44 4.44 0 0 1 2.831-.843 8.3 8.3 0 0 1 3.38.675l-.447 1.247a7.6 7.6 0 0 0-2.966-.641 2.88 2.88 0 0 0-1.779.489 1.61 1.61 0 0 0-.64 1.357 2.1 2.1 0 0 0 .236 1.049 2.2 2.2 0 0 0 .8.75 10 10 0 0 0 1.715.754 6.8 6.8 0 0 1 2.667 1.483 2.92 2.92 0 0 1 .723 2.057" class="logo_small_svg__cls-2" data-name="Path 2957"></path><path id="logo_small_svg__Path_2958" d="M134.447 101.686v5.991a2.4 2.4 0 0 0 .515 1.686 2.1 2.1 0 0 0 1.609.556 2.63 2.63 0 0 0 2.12-.792 4 4 0 0 0 .67-2.587v-4.854h1.4v9.236H139.6l-.2-1.239h-.075a2.8 2.8 0 0 1-1.193 1.045 4 4 0 0 1-1.74.362 3.53 3.53 0 0 1-2.524-.8 3.4 3.4 0 0 1-.839-2.562v-6.042Z" class="logo_small_svg__cls-2" data-name="Path 2958"></path><path id="logo_small_svg__Path_2959" d="M148.206 111.09a4 4 0 0 1-1.647-.333 3.1 3.1 0 0 1-1.252-1.023h-.1a12 12 0 0 1 .1 1.533v3.8h-1.4v-13.381h1.137l.194 1.264h.067a3.26 3.26 0 0 1 1.256-1.1 3.8 3.8 0 0 1 1.643-.337 3.41 3.41 0 0 1 2.836 1.256 6.68 6.68 0 0 1-.017 7.057 3.42 3.42 0 0 1-2.817 1.264m-.2-8.385a2.48 2.48 0 0 0-2.048.784 4.04 4.04 0 0 0-.649 2.494v.312a4.63 4.63 0 0 0 .649 2.785 2.47 2.47 0 0 0 2.082.839 2.16 2.16 0 0 0 1.875-.969 4.6 4.6 0 0 0 .678-2.671 4.43 4.43 0 0 0-.678-2.651 2.23 2.23 0 0 0-1.915-.923Z" class="logo_small_svg__cls-2" data-name="Path 2959"></path><path id="logo_small_svg__Path_2960" d="M159.039 111.09a4 4 0 0 1-1.647-.333 3.1 3.1 0 0 1-1.252-1.023h-.1a12 12 0 0 1 .1 1.533v3.8h-1.4v-13.381h1.137l.194 1.264h.067a3.26 3.26 0 0 1 1.256-1.1 3.8 3.8 0 0 1 1.643-.337 3.41 3.41 0 0 1 2.836 1.256 6.68 6.68 0 0 1-.017 7.057 3.42 3.42 0 0 1-2.817 1.264m-.2-8.385a2.48 2.48 0 0 0-2.048.784 4.04 4.04 0 0 0-.649 2.494v.312a4.63 4.63 0 0 0 .649 2.785 2.47 2.47 0 0 0 2.082.839 2.16 2.16 0 0 0 1.875-.969 4.6 4.6 0 0 0 .678-2.671 4.43 4.43 0 0 0-.678-2.651 2.23 2.23 0 0 0-1.911-.923Z" class="logo_small_svg__cls-2" data-name="Path 2960"></path><path id="logo_small_svg__Path_2961" d="M173.612 106.3a5.1 5.1 0 0 1-1.137 3.527 4 4 0 0 1-3.143 1.268 4.17 4.17 0 0 1-2.2-.581 3.84 3.84 0 0 1-1.483-1.669 5.8 5.8 0 0 1-.522-2.545 5.1 5.1 0 0 1 1.129-3.518 4 4 0 0 1 3.135-1.26 3.9 3.9 0 0 1 3.08 1.29 5.07 5.07 0 0 1 1.141 3.488m-7.036 0a4.4 4.4 0 0 0 .708 2.7 2.81 2.81 0 0 0 4.167 0 4.37 4.37 0 0 0 .712-2.7 4.3 4.3 0 0 0-.712-2.675 2.5 2.5 0 0 0-2.1-.915 2.46 2.46 0 0 0-2.072.9 4.33 4.33 0 0 0-.7 2.69Z" class="logo_small_svg__cls-2" data-name="Path 2961"></path><path id="logo_small_svg__Path_2962" d="M180.525 101.517a5.5 5.5 0 0 1 1.1.1l-.194 1.3a4.8 4.8 0 0 0-1.011-.127 2.46 2.46 0 0 0-1.917.911 3.32 3.32 0 0 0-.8 2.267v4.955h-1.4v-9.236h1.154l.16 1.71h.068a4.05 4.05 0 0 1 1.238-1.39 2.8 2.8 0 0 1 1.6-.49Z" class="logo_small_svg__cls-2" data-name="Path 2962"></path><path id="logo_small_svg__Path_2963" d="M187.363 109.936a4.5 4.5 0 0 0 .716-.055 4 4 0 0 0 .548-.114v1.07a2.5 2.5 0 0 1-.67.181 5 5 0 0 1-.8.072q-2.68 0-2.68-2.823v-5.494h-1.323v-.673l1.323-.582.59-1.972h.809v2.141h2.68v1.087h-2.68v5.435a1.87 1.87 0 0 0 .4 1.281 1.38 1.38 0 0 0 1.087.446" class="logo_small_svg__cls-2" data-name="Path 2963"></path><path id="logo_small_svg__Path_2964" d="M194.538 111.09a4.24 4.24 0 0 1-3.231-1.247 4.82 4.82 0 0 1-1.184-3.463 5.36 5.36 0 0 1 1.1-3.548 3.65 3.65 0 0 1 2.954-1.315 3.48 3.48 0 0 1 2.747 1.142 4.38 4.38 0 0 1 1.011 3.013v.885h-6.362a3.66 3.66 0 0 0 .822 2.469 2.84 2.84 0 0 0 2.2.843 7.4 7.4 0 0 0 2.949-.624v1.247a7.4 7.4 0 0 1-1.4.459 8 8 0 0 1-1.6.139Zm-.379-8.4a2.29 2.29 0 0 0-1.774.725 3.34 3.34 0 0 0-.779 2.006h4.828a3.07 3.07 0 0 0-.59-2.027 2.08 2.08 0 0 0-1.685-.706Z" class="logo_small_svg__cls-2" data-name="Path 2964"></path><path id="logo_small_svg__Path_2965" d="M206.951 109.683h-.076a3.29 3.29 0 0 1-2.9 1.407 3.43 3.43 0 0 1-2.819-1.239 5.45 5.45 0 0 1-1.006-3.522 5.54 5.54 0 0 1 1.011-3.548 3.4 3.4 0 0 1 2.814-1.264 3.36 3.36 0 0 1 2.883 1.365h.109l-.059-.665-.034-.649v-3.759h1.4v13.113h-1.138Zm-2.8.236a2.55 2.55 0 0 0 2.078-.779 3.95 3.95 0 0 0 .644-2.516v-.3a4.64 4.64 0 0 0-.653-2.8 2.48 2.48 0 0 0-2.086-.839 2.14 2.14 0 0 0-1.883.957 4.76 4.76 0 0 0-.653 2.7 4.55 4.55 0 0 0 .649 2.671 2.2 2.2 0 0 0 1.906.906Z" class="logo_small_svg__cls-2" data-name="Path 2965"></path><path id="logo_small_svg__Path_2966" d="M220.712 101.534a3.44 3.44 0 0 1 2.827 1.243 6.65 6.65 0 0 1-.009 7.053 3.42 3.42 0 0 1-2.818 1.26 4 4 0 0 1-1.648-.333 3.1 3.1 0 0 1-1.251-1.023h-.1l-.295 1.188h-1V97.809h1.4V101q0 1.069-.068 1.921h.068a3.32 3.32 0 0 1 2.894-1.387m-.2 1.171a2.44 2.44 0 0 0-2.064.822 6.34 6.34 0 0 0 .017 5.553 2.46 2.46 0 0 0 2.081.839 2.16 2.16 0 0 0 1.922-.94 4.83 4.83 0 0 0 .632-2.7 4.64 4.64 0 0 0-.632-2.689 2.24 2.24 0 0 0-1.959-.885Z" class="logo_small_svg__cls-2" data-name="Path 2966"></path><path id="logo_small_svg__Path_2967" d="M225.758 101.686h1.5l2.023 5.267a20 20 0 0 1 .826 2.6h.067q.109-.431.459-1.471t2.288-6.4h1.5l-3.969 10.518a5.25 5.25 0 0 1-1.378 2.212 2.93 2.93 0 0 1-1.934.653 5.7 5.7 0 0 1-1.264-.143V113.8a5 5 0 0 0 1.037.1 2.136 2.136 0 0 0 2.056-1.618l.514-1.314Z" class="logo_small_svg__cls-2" data-name="Path 2967"></path></g></g></svg></a><form class="download-url-wrapper"><input class="download-url-input" type="text" value="http://127.0.0.1:8000/docs/api-docs.json"><button class="download-url-button button">Explore</button></form></div></div></div><div class="swagger-ui"><div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-assets"><defs><symbol viewBox="0 0 20 20" id="unlocked"><path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z"></path></symbol><symbol viewBox="0 0 20 20" id="locked"><path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z"></path></symbol><symbol viewBox="0 0 20 20" id="close"><path d="M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z"></path></symbol><symbol viewBox="0 0 20 20" id="large-arrow"><path d="M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z"></path></symbol><symbol viewBox="0 0 20 20" id="large-arrow-down"><path d="M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z"></path></symbol><symbol viewBox="0 0 20 20" id="large-arrow-up"><path d="M 17.418 14.908 C 17.69 15.176 18.127 15.176 18.397 14.908 C 18.667 14.64 18.668 14.207 18.397 13.939 L 10.489 6.109 C 10.219 5.841 9.782 5.841 9.51 6.109 L 1.602 13.939 C 1.332 14.207 1.332 14.64 1.602 14.908 C 1.873 15.176 2.311 15.176 2.581 14.908 L 10 7.767 L 17.418 14.908 Z"></path></symbol><symbol viewBox="0 0 24 24" id="jump-to"><path d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z"></path></symbol><symbol viewBox="0 0 24 24" id="expand"><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path></symbol><symbol viewBox="0 0 15 16" id="copy"><g transform="translate(2, -1)"><path fill="#ffffff" fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></g></symbol></defs></svg></div><div><div class="information-container wrapper"><section class="block col-12"><div><div class="info"><hgroup class="main"><h2 class="title">Genshin API<span><small><pre class="version"> 1.0.0 </pre></small><small class="version-stamp"><pre class="version">OAS 3.0</pre></small></span></h2><a target="_blank" href="http://127.0.0.1:8000/docs/api-docs.json" rel="noopener noreferrer" class="link"><span class="url"> http://127.0.0.1:8000/docs/api-docs.json</span></a></hgroup><div class="description"></div></div></div></section></div><div class="scheme-container"><section class="schemes wrapper block col-12"><div class="auth-wrapper"><button class="btn authorize unlocked"><span>Authorize</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><path d="M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z"></path></svg></button></div></section></div><div><div class="filter-container"><section class="filter wrapper block col-12"><input class="operation-filter-input" placeholder="Filter by tag" type="text" value=""></section></div></div><div class="wrapper"><section class="block col-12 block-desktop col-12-desktop"><div><span><div class="opblock-tag-section"><h3 class="opblock-tag no-desc" id="operations-tag-Characters" data-tag="Characters" data-is-open="false"><a class="nostyle" href="#/Characters"><span>Characters</span></a><small></small><button aria-expanded="false" class="expand-operation" title="Expand operation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="arrow" width="20" height="20" aria-hidden="true" focusable="false"><path d="M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z"></path></svg></button></h3><noscript></noscript></div></span></div></section></div><div class="wrapper"><section class="block col-12 block-desktop col-12-desktop"></section></div></div></div><div class="wrapper"><section class=""></section></div></section></div>

<script src="http://127.0.0.1:8000/docs/asset/swagger-ui-bundle.js?v=33c03a3200a2896a44cf03aa482d3317"></script>
<script src="http://127.0.0.1:8000/docs/asset/swagger-ui-standalone-preset.js?v=f2e8d34c39f7b7a59647d27eedbb5a46"></script>
<script>
    window.onload = function() {
        // Build a system
        const ui = SwaggerUIBundle({
            dom_id: '#swagger-ui',
            url: "http://127.0.0.1:8000/docs/api-docs.json",
            operationsSorter: null,
            configUrl: null,
            validatorUrl: null,
            oauth2RedirectUrl: "http://127.0.0.1:8000/api/oauth2-callback",

            requestInterceptor: function(request) {
                request.headers['X-CSRF-TOKEN'] = '';
                return request;
            },

            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],

            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],

            layout: "StandaloneLayout",
            docExpansion : "none",
            deepLinking: true,
            filter: true,
            persistAuthorization: "false",

        })

        window.ui = ui

            }
</script>


</body>
