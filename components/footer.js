class ThisFooter extends HTMLElement {
    connectedCallback() {
    this.innerHTML = `
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-5">
              <div class="logo">
                <a href="index.html"><img src="assets/Homepage/LOGO LENORE-01.png" alt="logo"></a>
              </div>
            </div>
            <div class="col-lg-2">
              <h4>Information</h4>
            </div>
            <div class="col-lg-2">
              <h4>Products</h4>
            </div>
            <div class="col-lg-3">
              <h4>PT. Cahaya Desain Indonesia</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-btm">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quae ad. Vitae non natus necessitatibus laborum suscipit. Quod deserunt esse assumenda repudiandae, repellat, ullam nemo facilis quas incidunt labore sit?</p>
              <div class="social d-flex gap-3">
                <a href="#"><img src="assets/Homepage/socmed - IG.png" alt="social"></a>
                <a href="#"><img src="assets/Homepage/socmed - FB.png" alt="social"></a>
                <a href="#"><img src="assets/Homepage/socmed - linkedin.png" alt="social"></a>
                <a href="#"><img src="assets/Homepage/socmed - youtube.png" alt="social"></a>
              </div>
            </div>
            <ul class="col-lg-2">
              <li>kasja</li>
              <li>kasja</li>
              <li>kasja</li>
            </ul>
            <ul class="col-lg-2">
              <li>kasja</li>
              <li>kasja</li>
              <li>kasja</li>
            </ul>
            <div class="col-lg-3 cp-box">
              <ul>
                <li>
                  <span class="icon pin"></span>
                  <span class="text-f">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorum neque eos.</span>
                </li>
                <li>
                  <span class="icon call"></span>
                  <span class="text-f">Lorem ipsum dolor sit amet.</span>
                </li>
                <li>
                  <span class="icon fax"></span>
                  <span class="text-f">Lorem ipsum dolor sit amet.</span>
                </li>
                <li>
                  <span class="icon mail"></span>
                  <span class="text-f">Lorem ipsum dolor sit amet.</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          Copyright &copy; 2021 PT. Cahaya Desain Indonesia
        </div>
        
      </div>
    </footer>
    <!-- End Footer -->    
    `
    }
}

customElements.define('this-footer', ThisFooter)