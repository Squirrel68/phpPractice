               <?php require_once "./header.php"; ?>
               <!--	List Product	-->
               <div class="products">
                   <div id="search-result">Kết quả tìm kiếm với sản phẩm <span>
                           <%=keyword%>
                       </span></div>
                   <div class="product-list card-deck">
                       <%for(product of products){%>
                       <div class="product-item card text-center">
                           <a href="/product-<%=product.slug%>.<%=product._id%>"><img src="../images/<%=product.thumbnail[0]%>"></a>
                           <h4><a href="/product-<%=product.slug%>.<%=product._id%>">
                                   <%=product.name%>
                               </a></h4>
                           <p>Giá Bán: <span>
                                   <%=new Intl.NumberFormat("vi-VN", { style: "currency" , currency: "VND" ,
                                            minimumFractionDigits: 0, }).format(product.price)%>
                               </span></p>
                       </div>
                       <%}%>
                    </div>
                </div>
                <!--	End List Product	-->

                <?php require_once "./footer.php"; ?>