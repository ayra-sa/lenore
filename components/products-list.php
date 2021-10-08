const products = [
    {
        id: 0,
        title: 'lorem ipsum',
        desc: 'lngs-76tr',
        img: 'https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
    },
    {
        id: 1,
        title: 'lorem ipsum',
        desc: 'lngs-76tr',
        img: 'https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
    },
    {
        id: 2,
        title: 'lorem ipsum',
        desc: 'lngs-76tr',
        img: 'https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
    }
]

const el = document.getElementById('product-list');
          
        // Map is being called directly on an blogs
        // Arrow function is used
        el.innerHTML = products.map((product)=>{ 
            return `<div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 prod-item">
            <div class="card d-flex justify-content-between text-center">
              <img
                class="card-img-top"
                src=${product.img}
              />
              <div class="card-body">
                <p class="text-muted text-uppercase">${product.title}</p>
                <h5 class="text-uppercase title">${product.desc}</h5>
              </div>
            </div>
          </div>`;
        })
