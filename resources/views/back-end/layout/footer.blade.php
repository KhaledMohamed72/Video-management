<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ route('admin.home') }}">
                        website
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="{{ route('admin.home') }}" >website</a> .
        </div>
        <!-- your footer here -->
    </div>
</footer>