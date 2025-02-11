<?php
$meta = [
    'title' => "AS Research and Technical Analysis Services in India",
    'description' => " AS Research and Technical Analysis Services offer expert insights and strategies for market trends, helping clients make informed financial decisions",
    'keywords' => "technical stock analysis, market research technique, technical analysis explained, business research analyst, technical analysis, technical analysis of stocks, stock technical analysis, stock market technical analysis, technical analysis for stock market, stock market analysis, stock market fundamental analysis, fundamental analysis, equity fundamental analysis, fundamental analysis vs technical analysis, equity market analysis,",


];
include('../includes/header.php');

?>
	<!-- Header End -->

    <!-- Page Header Start -->
	<div class="page-header light-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Our  Updates</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="../index.php">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">news</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Our blog Section start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                       
                        <div class="post-item-body">
                        <h2><a href="#">Market news on February 10, 2025</a></h2>
                        <p class="post-summary">Indian equity markets are poised for a positive opening. GIFT Nifty indicates a rise of approximately 46.50 points, or 0.20%, suggesting an optimistic start for the Sensex and Nifty indices. </p>
                        <p class="post-full" style="display: none;">
                        In the previous session, the Sensex declined by 548.39 points (0.70%) to close at 77,311.80, while the Nifty 50 dropped 178.35 points (0.76%) to settle at 23,381.60. This downturn was attributed to subdued corporate earnings and global trade uncertainties. 
                            <br><br>
                      <b style="color:#1d295d; font-size:large;">Global Market News :</b>
                      U.S. markets closed higher, driven by gains in AI-related stocks and steelmakers. The Dow Jones Industrial Average increased by 0.38%, the S&P 500 rose by 0.67%, and the Nasdaq Composite advanced by 0.98%. 
                        <br><br>
                        <b style="color:#1d295d; font-size:large;">Commodities Market News :</b>
                        Gold prices reached a record high, with spot gold rising 0.4% to $2,919.90 per ounce, driven by safe-haven demand amid global uncertainties. 
                        <br><br>
                        <b style="color:#1d295d; font-size:large;">Our Expert Research :</b>
                        For investors looking for stock recommendations, AS Research Technic has suggested considering Doms Industries with a target price of ₹3,204 and a stop loss at ₹2,670. Bharti Airtel with target of ₹1,730 and stop loss ₹1,675. Sell ACC with a target of ₹1,900 and a stop loss of ₹1,980. With a target of ₹336 and a stop loss of ₹355, sell Crompton. Purchase RBL Bank with a goal of ₹175 and a stop loss of ₹165.50.
                        <br>
                        Overall, market participants are advised to monitor global developments and corporate earnings closely to make informed investment decisions.
                    </p>
                        
                    </div>
                        <div class="post-item-footer">
                            <button class="btn-default toggle-btn" onclick="toggleContent(this)">View More</button>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="post-featured-image">
                            <figure class="image-anime">
                                <a href="#"><img src="../images/post-2.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="post-item-body">
                            <h2><a href="#">Market news on February 11, 2025</a></h2> 
                            <p class="post-summary">Indian equity markets are poised for a positive opening. GIFT Nifty indicates a rise of approximately 46.50 points, or 0.20%, suggesting an optimistic start for the Sensex and Nifty indices.</p>
                            <p class="post-full" style="display: none;">
                            In the previous session, the Sensex declined by 548.39 points (0.70%) to close at 77,311.80, while the Nifty 50 dropped 178.35 points (0.76%) to settle at 23,381.60. This downturn was attributed to subdued corporate earnings and global trade uncertainties. 
                                <br><br>
                                Diversification remains a key principle for mitigating risk. Equities, bonds, and real estate should be considered as part of a balanced portfolio. 
                                While equity-oriented funds are now subject to a higher tax, alternative investment options like gold ETFs and debt mutual funds provide tax efficiency.
                                <br><br>
                                Investors who traditionally relied on equity mutual funds for long-term gains must now reassess the tax implications and explore hybrid funds or index funds.
                                The increased STCG tax on mutual funds may discourage frequent trading and encourage a shift toward long-term investments.
                                <br><br>
                                Furthermore, individuals should consider taking advantage of tax-saving instruments like the Public Provident Fund (PPF), National Pension System (NPS), and tax-free bonds.
                                Understanding the tax benefits and drawbacks of different investment options will be crucial in making informed financial decisions.
                                <br><br>
                                As inflationary pressures persist and global markets fluctuate, focusing on asset allocation strategies that balance risk and return will help investors navigate the uncertain economic environment. 
                                Investors must review their portfolios periodically to ensure they align with changing tax regulations and economic trends.
                            </p>
                        </div>
                        <div class="post-item-footer">
                            <button class="btn-default toggle-btn" onclick="toggleContent(this)">View More</button>
                        </div>
                    </div>
                </div> -->
            </div>
            
            <script>
                function toggleContent(button) {
                    document.querySelectorAll('.post-full').forEach(post => {
                        if (post !== button.parentElement.previousElementSibling.querySelector('.post-full')) {
                            post.style.display = "none";
                            post.previousElementSibling.style.display = "block";
                        }
                    });
            
                    document.querySelectorAll('.toggle-btn').forEach(btn => {
                        if (btn !== button) {
                            btn.textContent = "View More";
                        }
                    });
            
                    let postSummary = button.parentElement.previousElementSibling.querySelector('.post-summary');
                    let postFull = button.parentElement.previousElementSibling.querySelector('.post-full');
            
                    if (postFull.style.display === "none") {
                        postFull.style.display = "block";
                        postSummary.style.display = "none";
                        button.textContent = "View Less";
                    } else {
                        postFull.style.display = "none";
                        postSummary.style.display = "block";
                        button.textContent = "View More";
                    }
                }
            </script>
            
            
            
            <div class="row">
				<div class="col-md-12">
					<!-- Post Pagination Start -->
					<div class="post-pagination wow fadeInUp" data-wow-delay="0.75s">
						<ul class="pagination">
							<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
							<li class="active"><a href="./news.php">1</a></li>
							<li ><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
						</ul>
					</div>
					<!-- Post Pagination End -->
				</div>
			</div>
        </div>
    </div>
    <!-- Our blog Section End -->

    <?php ;

include('../includes/footer.php');

?>

</html>