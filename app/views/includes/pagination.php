<nav aria-label="Navegação de paginas" class="mt-3">
    <ul class="pagination">
        <li class="page-item <?= $page <= 1 ? "disabled" : "" ?>">
            <a href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" class="page-link text-dark" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
            <li class="page-item <?= $page_number == $page ? "active" : "" ?>">
                <a href="?pagina=<?= $page_number ?>" class="page-link text-dark"><?= $page_number ?></a>
            </li>

        <?php endfor; ?>

        <li class="page-item <?= $page >= $total_pages ? "disabled" : "" ?>">
            <a href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>" class="page-link text-dark" aria-label="Proximo">
            <span aria-hidden="true">&raquo;</span>
            </a>

        </li>
    </ul>
</nav>