<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>{{ config('app.name', 'Donate-Me') }}</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Donate-Me adalah sebuah platform dimana ruang untuk donate bagi sesiapa." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('resources/media/Irkuhs-1.png') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

    <body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <style>
                #kt_app_root {
                    background-color: #777777 !important; /* Ensure root div also has black background */
                    height: 100vh; /* Make sure it takes full height */
                }

                .centered-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .centered-image {
                    width: 70%;
                    height: 70%;
                    border: 2px solid rgb(255, 255, 255);
                }

                .d-flex {
    display: flex;
    flex-wrap: wrap; /* Allows buttons to wrap on smaller screens */
}

.justify-content-between {
    justify-content: space-between;
}

.btn-secondary {
    flex: 1;
    margin: 5px; /* Adjusted margin for better spacing */
}

.custom-card {
    border: 2px solid #d86b11;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

@media (max-width: 576px) {
    .btn-secondary {
        flex: 0 0 100%; /* Buttons will take full width on small screens */
    }
}

            </style>
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <a href="#" class="mb-6 centered-container">
                            <img alt="Logo" src="{{ asset('resources/media/Irkuhs-2.png') }}" class="centered-image" />
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-center w-lg-50 p-10">
                    <div class="card rounded-3 w-md-550px custom-card">
                        <div class="card-body p-10 p-lg-20">
                            @if(session('success'))
                                <div class="alert alert-success mb-4" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('donate') }}" method="POST">
                                @csrf
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Donate-Me</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">This platform is created by IRKUHS.</div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="form-label fs-6 fw-bolder text-dark">Amount (RM)</label>
                                    <input class="form-control form-control-lg" type="number" name="amount" id="amount" />
                                </div>
                                <div class="d-flex mb-10 justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="setAmount(3.00)">RM 3</button>
                                    <button type="button" class="btn btn-secondary" onclick="setAmount(5.00)">RM 5</button>
                                    <button type="button" class="btn btn-secondary" onclick="setAmount(10.00)">RM 10</button>
                                    <button type="button" class="btn btn-secondary" onclick="setAmount(15.00)">RM 15</button>
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Donate</span>
                                    </button>
                                </div>
                            </form>

                            <script>
                                function setAmount(value) {
                                    document.getElementById('amount').value = value;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var hostUrl = "assets/";
        </script>
        <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    </body>
</html>
