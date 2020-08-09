<html>
<head>
    <title>Tailwind for Bootstrap devs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/tailwind.css">
</head>
<body class="tw-py-10">
    <div class="container">
        <h1>Grid system</h1>

        <h2>Bootstrap</h2>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    One of three columns
                </div>
                <div class="col-sm">
                    One of three columns
                </div>
                <div class="col-sm">
                    One of three columns
                </div>
            </div>
        </div>

        <h2>Tailwind Flexbox</h2>

        <div class="sm:tw-flex">
            <div class="tw-flex-1 tw-px-4">One of three columns</div>
            <div class="tw-flex-1 tw-px-4">One of three columns</div>
            <div class="tw-flex-1 tw-px-4">One of three columns</div>
        </div>

        <h2>Tailwind Grid</h2>

        <div class="tw-grid tw-grid-cols-3">
            <div class="tw-px-4">One of three columns</div>
            <div class="tw-px-4">One of three columns</div>
            <div class="tw-px-4">One of three columns</div>
        </div>

        <h1>Alerts</h1>

        <h2>Bootstrap</h2>

        <div class="alert alert-primary" role="alert">
            A simple primary alert—check it out!
        </div>
        <div class="alert alert-secondary" role="alert">
            A simple secondary alert—check it out!
        </div>
        <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
        </div>
        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>
        <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
        </div>
        <div class="alert alert-info" role="alert">
            A simple info alert—check it out!
        </div>
        <div class="alert alert-light" role="alert">
            A simple light alert—check it out!
        </div>
        <div class="alert alert-dark" role="alert">
            A simple dark alert—check it out!
        </div>

        <h2>Tailwind</h2>

        <div class="tw-rounded tw-border-indigo-300 tw-text-blue-800 tw-bg-indigo-200 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple primary alert—check it out!
        </div>

        <div class="tw-rounded tw-border-gray-400 tw-text-gray-800 tw-bg-gray-300 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple secondary alert—check it out!
        </div>

        <div class="tw-rounded tw-border-green-300 tw-text-green-900 tw-bg-green-200 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple success alert—check it out!
        </div>
        <div class="tw-rounded tw-border-red-400 tw-text-red-900 tw-bg-red-300 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple danger alert—check it out!
        </div>
        <div class="tw-rounded tw-border-orange-300 tw-text-yellow-800 tw-bg-orange-200 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple warning alert—check it out!
        </div>
        <div class="tw-rounded tw-border-teal-300 tw-text-teal-800 tw-bg-teal-100 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple info alert—check it out!
        </div>
        <div class="tw-rounded tw-border-white tw-text-gray-600 tw-bg-white tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple light alert—check it out!
        </div>
        <div class="tw-rounded tw-border-gray-500 tw-text-gray-900 tw-bg-gray-400 tw-my-4 tw-py-3 tw-px-3 tw-border tw-border-solid" role="alert">
            A simple dark alert—check it out!
        </div>

        <h1>Badge</h1>

        <h2>Bootstrap</h2>

        <h1>Example heading <span class="badge badge-secondary">New</span></h1>
        <h2>Example heading <span class="badge badge-secondary">New</span></h2>
        <h3>Example heading <span class="badge badge-secondary">New</span></h3>
        <h4>Example heading <span class="badge badge-secondary">New</span></h4>
        <h5>Example heading <span class="badge badge-secondary">New</span></h5>
        <h6>Example heading <span class="badge badge-secondary">New</span></h6>

        <h2>Tailwind</h2>
        <h1>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-3 tw-py-1 tw-text-3xl">New</span></h1>
        <h2>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-3 tw-py-1 tw-text-2xl">New</span></h2>
        <h3>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-3 tw-py-1 tw-text-xl">New</span></h3>
        <h4>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-2 tw-py-1 tw-text-lg">New</span></h4>
        <h5>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-2 tw-py-1 tw-text-sm">New</span></h5>
        <h6>Example heading <span class="tw-bg-gray-600 tw-text-white tw-inline-block tw-font-bold tw-rounded tw-px-2 tw-py-1 tw-text-xs">New</span></h6>

        <h1>Breadcrumbs</h1>

        <h2>Bootstrap</h2>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>

        <h2>Tailwind</h2>

        <nav aria-label="breadcrumb">
            <ol class="rounded tw-bg-gray-200 tw-px-4 tw-py-3 tw-text-gray-600 tw-list-none tw-flex">
                <li aria-current="page">Home</li>
            </ol>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="rounded tw-bg-gray-200 tw-px-4 tw-py-3 tw-text-gray-600 tw-list-none tw-flex">
                <li><a class="tw-text-blue-500 hover:tw-underline" href="#">Home</a></li>
                <li class="tw-px-2">/</li>
                <li aria-current="page">Library</li>
            </ol>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="rounded tw-bg-gray-200 tw-px-4 tw-py-3 tw-text-gray-600 tw-list-none tw-flex">
                <li><a class="tw-text-blue-500 hover:tw-underline" href="#">Home</a></li>
                <li class="tw-px-2">/</li>
                <li><a class="tw-text-blue-500 hover:tw-underline" href="#">Library</a></li>
                <li class="tw-px-2">/</li>
                <li aria-current="page">Data</li>
            </ol>
        </nav>

        <h1>Buttons</h1>

        <h2>Bootstrap</h2>

        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>

        <button type="button" class="btn btn-link">Link</button>

        <h2>Tailwind</h2>

        <button type="button" class="tw-bg-blue-500 hover:tw-bg-blue-600 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Primary</button>
        <button type="button" class="tw-bg-gray-600 hover:tw-bg-gray-700 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Secondary</button>
        <button type="button" class="tw-bg-green-600 hover:tw-bg-green-700 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Success</button>
        <button type="button" class="tw-bg-red-600 hover:tw-bg-red-700 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Danger</button>
        <button type="button" class="tw-bg-yellow-500 hover:tw-bg-yellow-600 tw-text-black tw-rounded tw-border-0 tw-px-3 tw-py-2">Warning</button>
        <button type="button" class="tw-bg-teal-500 hover:tw-bg-teal-600 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Info</button>
        <button type="button" class="tw-bg-gray-200 hover:tw-bg-gray-300 tw-text-black tw-rounded tw-border-0 tw-px-3 tw-py-2">Light</button>
        <button type="button" class="tw-bg-gray-800 hover:tw-bg-gray-900 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2">Dark</button>
        <button type="button" class="tw-bg-white xl:tw-text-blue-500 tw-rounded tw-border-0 tw-px-3 tw-py-2 hover:tw-underline">Link</button>

        <h2>Bootstrap</h2>

        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>

        <h2>Tailwind</h2>

        <button type="button" class="tw-border-blue-500 tw-text-blue-500 hover:tw-bg-blue-500 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Primary</button>
        <button type="button" class="tw-border-gray-600 tw-text-gray-600 hover:tw-bg-gray-600 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Secondary</button>
        <button type="button" class="tw-border-green-600 tw-text-green-600 hover:tw-bg-green-600 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Success</button>
        <button type="button" class="tw-border-red-600 tw-text-red-600 hover:tw-bg-red-600 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Danger</button>
        <button type="button" class="tw-border-yellow-600 tw-text-yellow-600 hover:tw-bg-yellow-600 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Warning</button>
        <button type="button" class="tw-border-teal-600 tw-text-teal-600 hover:tw-bg-teal-600 hover:tw-text-white tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Info</button>
        <button type="button" class="tw-border-gray-100 tw-text-gray-100 hover:tw-bg-gray-100 hover:tw-text-black tw-text-white tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Light</button>
        <button type="button" class="tw-border-gray-900 tw-text-gray-900 hover:tw-bg-gray-900 hover:tw-text-white tw-text-black tw-bg-white tw-border tw-border-solid tw-rounded tw-border-0 tw-px-3 tw-py-2">Dark</button>

        <h1>Button Groups</h1>

        <h2>Bootstrap</h2>

        <div class="btn-group">
            <button type="button" class="btn btn-secondary">Left</button>
            <button type="button" class="btn btn-secondary">Middle</button>
            <button type="button" class="btn btn-secondary">Right</button>
        </div>

        <h2>Tailwind</h2>

        <div class="tw-flex">
            <button type="button" class="tw-bg-gray-600 hover:tw-bg-gray-700 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2 tw-rounded-r-none">Left</button>
            <button type="button" class="tw-bg-gray-600 hover:tw-bg-gray-700 tw-text-white tw-border-0 tw-px-3 tw-py-2 tw-rounded-none">Middle</button>
            <button type="button" class="tw-bg-gray-600 hover:tw-bg-gray-700 tw-text-white tw-rounded tw-border-0 tw-px-3 tw-py-2 tw-rounded-l-none">Right</button>
        </div>
    </div>
</body>
</html>
