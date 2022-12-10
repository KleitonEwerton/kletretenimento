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

    $itens_per_page = 6;
    $start_limit = $itens_per_page * $page - $itens_per_page;
    $rows_count = App::get('database')->countAll('posts');

    if ($start_limit > $rows_count) {
      return redirect('listaPost');
    }

    $total_pages = ceil($rows_count / $itens_per_page);
    $posts = App::get('database')->selectAll('posts', $start_limit, $itens_per_page);


    return view('site/listaPost', compact("posts", "page", "total_pages"));

    // return view('site/listaPost');
  }
}
