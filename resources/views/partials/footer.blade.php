
      <footer class="container-fluid py-4">
        <div class="row">
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 big_text">Контакты</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-3 big_text">График работы</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 big_text">Почта</div>
        </div>
        <div class="row">
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 normal_item">Менеджер: 8029 274 45 18</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-3 normal_item">Понедельник - Пятница: с 9:00 до 18:00</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 normal_item">ria_globus05@mail.ru</div>
        </div>
        <div class="row">
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 normal_item">Директор: 8029 795 34 64</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-3 normal_item">Суббота, Воскресенье: выходной</div>
          <div class="col-1 d-none d-md-block"></div>
          <div class="col-12 col-md-2 networks">
            <div class="d-flex justify-content-start text-center">
              <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
              <a href="#" class="mx-2"><i class="fab fa-telegram-plane"></i></a>
              <a href="#" class="mx-2"><i class="fab fa-viber"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <script>
        const btnIcon = document.querySelector('.btn-icon');
        const searchForm = document.querySelector('.search-form');
        const searchInput = searchForm.querySelector('input[type="text"]');
    
        btnIcon.addEventListener('click', () => {
          searchForm.style.display = searchForm.style.display === 'none' ? 'block' : 'none';
        });
    
        document.addEventListener('click', (event) => {
          if (!btnIcon.contains(event.target)) {
            searchForm.style.display = 'none';
          }
        });
        
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>