<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Dashboard' ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }

        .nav-link.active {
            background-color: rgba(255,255,255,0.1);
            border-radius: 0.25rem;
        }

        .nav-link:hover {
            background-color: rgba(255,255,255,0.05);
            border-radius: 0.25rem;
        }
        
        #sidebar {
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .card {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>