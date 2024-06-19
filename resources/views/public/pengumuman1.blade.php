@extends('layouts.mainPublic')

@section('title', 'Pengumuman Desa')

@section('content')
    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Pengumuman Desa</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pengumuman Desa</li>
            <li></li>
          </ol>
        </div>
      </div>
    </section>

    <div class="row g-5">
      <div class="col-md-8">
        <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-md-8 ps-3 ms-auto">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1 text-center">Sample blog post</h2>
                     <!-- $berita->title -->
                    <p class="blog-post-meta text-center">January 1, 2021 by <a href="#">Mark</a></p>
                    <img src="green/assets/img/about.jpg" class="img-fluid w-80" alt="">
                    <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                    <hr>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                        <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body of text used throughout. This is an example unordered list:</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p>
                    <dl>
                        <dt>HyperText Markup Language (HTML)</dt>
                        <dd>The language used to describe and define the content of a Web page</dd>
                        <dt>Cascading Style Sheets (CSS)</dt>
                        <dd>Used to describe the appearance of Web content</dd>
                        <dt>JavaScript (JS)</dt>
                        <dd>The programming language used to build advanced Web sites and applications</dd>
                    </dl>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1 text-center">Another blog post</h2>
                    <p class="blog-post-meta text-center">December 23, 2020 by <a href="#">Jacob</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <blockquote class="blockquote text-center">
                        <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body of text used throughout. This is an example unordered list:</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p>
                    <dl>
                        <dt>HyperText Markup Language (HTML)</dt>
                        <dd>The language used to describe and define the content of a Web page</dd>
                        <dt>Cascading Style Sheets (CSS)</dt>
                        <dd>Used to describe the appearance of Web content</dd>
                        <dt>JavaScript (JS)</dt>
                        <dd>The programming language used to build advanced Web sites and applications</dd>
                    </dl>
                </article>

                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1 text-center">New feature</h2>
                    <p class="blog-post-meta text-center">December 14, 2020 by <a href="#">Chris</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                </article>


            </div>
        </div>
    </div>
      </div>

          <div class="col-md-4">
            <!-- Sidebar Section -->
            <div class="position-sticky" style="top: 2rem;">
                <!-- Categories Section -->
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Kategori</h4>
                    <ul class="mb-0">
                        <li><a href="#">Kategori 1</a></li>
                        <li><a href="#">Kategori 2</a></li>
                        <li><a href="#">Kategori 3</a></li>
                        <li><a href="#">Kategori 4</a></li>
                        <li><a href="#">Kategori 5</a></li>
                    </ul>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">Berita Terakhir</h4>
                    <ol class="list-unstyled mb-0">
                        @foreach($berita as $item)
                        <li><a href="#">{{ $item->judul }}</a></li>
                        @endforeach
                    </ol>
          </div>
        </div>
      </div>
    </div>
    @endsection