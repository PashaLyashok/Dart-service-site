<body>
    <div class="site">
        <div class="container_site">
            <header class="header">
                <div class="container_header">
                    <div class="logo">
                        <a href="/"><img src="/image/logo.png" alt="logo-image"></a>
                        <a href="/"><span>DART<br/>SERVICE MANAGER</span></a>
                    </div>
                    <nav class="nav">
                        <ul>
                            <?php echo header_nav(); ?>
                        </ul>
                    </nav>
                    <?php
                        echo get_reg();
                    ?>
                </div>
            </header>