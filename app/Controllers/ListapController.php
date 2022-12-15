<?php

namespace App\Controllers;

use App\Core\App;

class ListapController extends Controller
{
  public function view()
  {
    $page = 1;

    if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
      $page = intval($_GET['pagina']);

      if ($page <= 0) {
        return redirect('listaPost');
      }
    }

    $itens_per_page = 4;
    $start_limit = $itens_per_page * $page - $itens_per_page;

    if (isset($_GET['search'])) {

      $rows_count = App::get('database')->countAll('posts');
      $posts = App::get('database')->search($_GET['search'], $start_limit, $itens_per_page);
    } else {
      $rows_count = App::get('database')->countAll('posts');
      $posts = App::get('database')->selectAll('posts', $start_limit, $itens_per_page);
    }

    if ($start_limit > $rows_count) {
      return redirect('listaPost');
    }

    $total_pages = ceil($rows_count / $itens_per_page);

    return view('site/listaPost', compact("posts", "page", "total_pages"));
  }
}
