<div class="container mt-3">
    <div class="row d-flex">
      <div class="col-lg-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                Categories
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is
                the first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                Brand
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is
                the second item's accordion body. Let's imagine this being
                filled with some actual content.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree"
              >
                Contact
              </button>
            </h2>
            <div
              id="flush-collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is
                the third item's accordion body. Nothing more exciting
                happening here in terms of content, but just filling up the
                space to make it look, at least at first glance, a bit more
                representative of how this would look in a real-world
                application.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseThree"
              >
                Account
              </button>
            </h2>
            <div
              id="flush-collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Placeholder content for this accordion, which is intended to
                demonstrate the <code>.accordion-flush</code> class. This is
                the third item's accordion body. Nothing more exciting
                happening here in terms of content, but just filling up the
                space to make it look, at least at first glance, a bit more
                representative of how this would look in a real-world
                application.
              </div>
            </div>
          </div>
        </div>
      </div>





      <div class="col-lg-9">
        <div class="row">
            @foreach ($products as $product)
          <div class="col-lg-4 my-3" style="">
            <div class="card" style="width: 15rem">
              <img
                class="card-img-top mx-auto my-2"
                src="{{asset('/uploads/'. unserialize($product->imgs)[0])}}"
                alt="Card image cap"
                style="width: 150px; height: 200px"
              />
              <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">
                 {{substr($product->description,0,100)}}
                </p>
              </div>
              <button class="btn-secondary mb-2">Price: {{$product->price}}</button>
              <div class="card-footer">
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-primary btn-sm">View Detail</a>
                  <a href="{{url('add',$product->id)}}" class="btn btn-primary btn-sm">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach



        </div>
      </div>
    </div>
  </div>
