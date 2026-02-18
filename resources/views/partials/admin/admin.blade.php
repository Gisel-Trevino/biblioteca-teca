<footer class="bg-white border-t p-6 text-center mt-auto">
                <p class="text-gray-600 text-sm">
                    &copy; 2024 Admin Biblioteca Central. Todos los derechos reservados. <br class="md:hidden">
                    Desarrollado con <span class="text-red-500">♥</span> y Vanilla JS.
                </p>
            </footer>
        </main>
    </div>
    <script>
        const btn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        btn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Cerrar sidebar al hacer click fuera en móviles (Opcional pero recomendado)
        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !btn.contains(e.target) && window.innerWidth < 768) {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>
</html>