<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Gasoek+One&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Kablammo&display=swap");
* {
  margin: 0;
  padding: 0;
  font-family: "Nunito", sans-serif;
}

::root {
  --color1: #53d3d1;
  --color2: #002447;
  --color3: #fbeceb;
  --color4: #feb249;
}

body {
  background: #002447;

  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

section {
  background: #fbeceb;
  width: 700px;
  border-radius: 5px;
}

.content {
  display: flex;
  justify-content: space-between;
}

/* Left Side:Start */
.left {
  display: block;
  height: fit-content;
  min-width: 250px;
}
.left .product_img {
  height: 250px;
  width: 230px;
  margin: 10px;
  border-radius: 5px;

  background: url("https://i.postimg.cc/X799Yjd4/product-1.jpg") no-repeat;
  background-position: center;
  background-size: cover;
}
.product_details {
  text-align: left;
  margin: 0 10px 10px;
  padding: 5px;
}
.product_details .title {
  font-size: 1.3em;
  color: rgb(99, 99, 99);
  font-weight: 900;
}
.product_details .discription {
  margin-top: 2px;
  font-size: 0.8em;
  color: gray;
}
.product_details .price {
  margin-top: 4px;
  font-size: 1.1em;
  font-weight: 600;
  white-space: pre;
}
.product_details .price span {
  font-weight: 500;
}
.product_details .price .price_original {
  text-decoration: line-through;
  font-size: 0.7em;
  font-weight: 400;
  color: gray;
}
.product_details .price .offer {
  color: #03ac13;
  font-weight: 600;
}
.product_details .other {
  font-size: 0.8em;
  color: grey;
}
/* Left Side:End */

/* Right Side:Start */
.right {
  display: block;
}
.right .product_description {
  text-align: left;
  margin: 30px 20px;
}
.product_description h4 {
  font-size: 0.9em;
  font-weight: 900;
  margin-bottom: 20px;
}
.product_description p {
  font-size: 0.8em;
  color: grey;
  margin-bottom: 15px;
}
.product_description .highlight {
  color: rgb(99, 99, 99);
  font-weight: 900;
}
.product_description .special {
  font-size: 0.85em;
}
/* Right Side:End */

/* Responsiveness:Start */
@media screen and (min-width: 320px) and (max-width: 480px) {
  .content {
    display: flex;
    flex-direction: column;
    width: 100vw;
    border-radius: 0px;
  }
  section {
    width: 100% !important;
  }
  .product_img {
    width: calc(100vw - 6%) !important;
    height: 350px !important;
  }
  h4.title {
    font-size: 1em !important;
  }
  p {
    width: 90%;
  }
  p.discription {
    font-size: 0.7em !important;
  }
  p.other {
    font-size: 0.7em !important;
  }
}
/* Responsiveness:End */

</style>

<!-- resources/views/components/product-modal.blade.php -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Product:Start -->
                <section class="box">
                    <div class="content">
                        <div class="left">
                            <div class="product_img"></div>
                            <div class="product_details">
                                <h4 class="title"></h4>
                                <p class="brand"></p>
                                <p class="description"></p>
                                <p class="price">₹<span class="price_current"></span></p>
                                <p class="quantity"></p>
                                <p class="type_name"></p>
                                <p class="type_category"></p>
                                <p class="other">inclusive of all taxes</p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="product_description">
                                <h4>PRODUCT DESCRIPTION</h4>
                                <p class="product_description_text"></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Product:End -->
            </div>
        </div>
    </div>
</div>
