@extends('layout.main')

@section('title', 'Struktur Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Struktur Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Struktur Desa</li>
            </ol>
        </div>
    </div>
</section>

<style>
    .layout {
        display: flex;
        margin-top: 20px;
    }
    .sidebar {
        width: 250px;
        background-color: #f0f0f0;
        padding: 10px;
    }
    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }
    .sidebar ul li {
        padding: 10px;
        cursor: pointer;
    }
    .sidebar ul li a {
        text-decoration: none;
        color: black;
    }
    .content {
        flex-grow: 1;
        padding: 20px;
    }
</style>

<div class="container">
    <div class="layout">
        <div class="sidebar">
            <ul>
                <li><a href="#" data-content="struktur-organisasi">Struktur Organisasi</a></li>
                <li><a href="#" data-content="kepala-desa">Kepala Desa</a></li>
                <li><a href="#" data-content="sekretaris-desa">Sekretaris Desa</a></li>
                <li><a href="#" data-content="kaur-pemerintahan">Kaur Pemerintahan</a></li>
                <li><a href="#" data-content="kaur-pembangunan">Kaur Pembangunan</a></li>
                <li><a href="#" data-content="kaur-pemberdayaan-masyarakat">Kaur Pemberdayaan Masyarakat</a></li>
                <li><a href="#" data-content="kaur-kesejahteraan-rakyat">Kaur Kesejahteraan Rakyat</a></li>
                <li><a href="#" data-content="kaur-umum">Kaur Umum</a></li>
                <li><a href="#" data-content="kaur-keuangan">Kaur Keuangan</a></li>
                <li><a href="#" data-content="ketua-karang-taruna">Ketua Karang Taruna</a></li>
                <li><a href="#" data-content="pranata-komputer">Pranata Komputer</a></li>
                <li><a href="#" data-content="badan-permusyawaratan-desa">Badan Permusyawaratan Desa</a></li>
            </ul>
        </div>
        <div class="content" id="content">
            <h3>Struktur Desa</h3>
            <p>Content related to Struktur Desa will be displayed here.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.sidebar ul li a');
        const content = document.getElementById('content');

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const contentId = this.getAttribute('data-content');
                loadContent(contentId);
            });
        });

        function loadContent(contentId) {
            let contentHtml = '';

            switch(contentId) {
                case 'struktur-organisasi':
                    contentHtml = '<h3>Struktur Organisasi</h3><p>Content for Struktur Organisasi.</p>';
                    break;
                case 'kepala-desa':
                    contentHtml = '<h3>Kepala Desa</h3><p>Content for Kepala Desa.</p>';
                    break;
                case 'sekretaris-desa':
                    contentHtml = '<h3>Sekretaris Desa</h3><p>Content for Sekretaris Desa.</p>';
                    break;
                case 'kaur-pemerintahan':
                    contentHtml = '<h3>Kaur Pemerintahan</h3><p>Content for Kaur Pemerintahan.</p>';
                    break;
                case 'kaur-pembangunan':
                    contentHtml = '<h3>Kaur Pembangunan</h3><p>Content for Kaur Pembangunan.</p>';
                    break;
                case 'kaur-pemberdayaan-masyarakat':
                    contentHtml = '<h3>Kaur Pemberdayaan Masyarakat</h3><p>Content for Kaur Pemberdayaan Masyarakat.</p>';
                    break;
                case 'kaur-kesejahteraan-rakyat':
                    contentHtml = '<h3>Kaur Kesejahteraan Rakyat</h3><p>Content for Kaur Kesejahteraan Rakyat.</p>';
                    break;
                case 'kaur-umum':
                    contentHtml = '<h3>Kaur Umum</h3><p>Content for Kaur Umum.</p>';
                    break;
                case 'kaur-keuangan':
                    contentHtml = '<h3>Kaur Keuangan</h3><p>Content for Kaur Keuangan.</p>';
                    break;
                case 'ketua-karang-taruna':
                    contentHtml = '<h3>Ketua Karang Taruna</h3><p>Content for Ketua Karang Taruna.</p>';
                    break;
                case 'pranata-komputer':
                    contentHtml = '<h3>Pranata Komputer</h3><p>Content for Pranata Komputer.</p>';
                    break;
                case 'badan-permusyawaratan-desa':
                    contentHtml = '<h3>Badan Permusyawaratan Desa</h3><p>Content for Badan Permusyawaratan Desa.</p>';
                    break;
                default:
                    contentHtml = '<h3>Struktur Desa</h3><p>Content related to Struktur Desa will be displayed here.</p>';
            }

            content.innerHTML = contentHtml;
        }
    });
</script>
@endsection
