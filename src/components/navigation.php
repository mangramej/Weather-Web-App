<!-- NAVIGATION -->
<div class="row mb-3">
    <div class="col">
        <nav class="navbar shadow-sm">
            <div class="container-fluid">
                <a href="/" class="navbar-brand text-uppercase text-dark">ph weather</a>
                <form class="d-flex" method="POST" action="/">
                    <input 
                        class="form-control me-2 <?= isset($searchErr) ? $searchErr : '' ?>"
                        id="search" 
                        name="search" 
                        autocomplete="off" 
                        placeholder="City" 
                        required>
                    <button class="btn btn-outline-info" id="btn-search" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- END NAVIGATION -->