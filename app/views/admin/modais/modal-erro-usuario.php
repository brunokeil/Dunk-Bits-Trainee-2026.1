      <div class="modalUser warningModal" id="errorModal">
          <div class="warningHeader">
              <ion-icon name="warning"></ion-icon>

              <span>
                  <h1>Erro</h1>
              </span>
          </div>

          <p><?php echo $_SESSION['error_message']; ?></p>
          <div class="footerButtons">
              <button class="closeModalBtn cancelBtn">OK</button>
          </div>
          <?php unset($_SESSION['error_message']); ?>
      </div>