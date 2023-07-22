<footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
        <b>Visitas:</b>
        @if (isset($pagina->visitas))
            {{ $pagina->visitas }}
        @else
            0
        @endif
    </div>
    <strong>Copyright &copy; 2023 <a href="#">EVENTOS.BO</a></strong> All rights reserved.
</footer>
