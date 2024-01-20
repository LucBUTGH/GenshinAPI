<x-header/>
<head>
    <meta charset="UTF-8">
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

    .topbar {
            display: none;
    }

    body {
      margin:0;
      background: #fafafa;
    }
    </style>
</head>

<body>
    
    <div id="swagger-ui">
        <section class="swagger-ui swagger-container">
          <div class="topbar">
            <div class="wrapper">
              <div class="topbar-wrapper">
                <a rel="noopener noreferrer" class="link">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407 116" height="40">
                    <defs>
                      <clipPath id="logo_small_svg__clip-SW_TM-logo-on-dark">
                        <path d="M0 0h407v116H0z"></path>
                      </clipPath>
                    </defs>
                    <g id="logo_small_svg__SW_TM-logo-on-dark" style="clip-path: url(&quot;#logo_small_svg__clip-SW_TM-logo-on-dark&quot;);">
                      <!-- SVG content omitted for brevity -->
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>

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
<x-footer/>