<?php
$logo = get_field('logo');
$listData = get_field('list');
$copyright = get_field('copyright');
$privacypolicy = get_field('privacypolicy');
$iconData = get_field('icons')
?>
<style>
  #wise-footer .footer-top-container {
    background: black;
    padding-bottom: 4rem; /* equivalent to pb-16 */
}

#wise-footer .footer-top-container  .footer-inner-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 1440px;
    padding-left: 1rem; /* equivalent to px-4 */
    padding-right: 1rem; /* equivalent to px-4 */
    text-align: center;
}

/* Media queries for lg and xl breakpoints */
@media (min-width: 1024px) {
    .footer-inner-container {
        padding-left: 1.25rem; /* equivalent to lg:px-20 */
    }
}

@media (min-width: 1280px) {
    .footer-inner-container {
        padding-left: 7.5rem; /* equivalent to xl:px-120 */
    }
}

#wise-footer {
    background-color: #000;
    padding-bottom: 4rem;
    padding-top: 10px;
}

#wise-footer > div {
    max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem; /* Equivalent to px-4 */
    padding-right: 1rem; /* Equivalent to px-4 */
    text-align: center;
}

#wise-footer > div > div {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3.5rem; /* Equivalent to gap-14 */
    text-align: center;
}

#wise-footer > div > div > img {
    width: 216px;
    height: 48px;
}

#wise-footer > div > div > ul {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    font-family: 'Lato', sans-serif;
    font-size: 0.875rem; /* Equivalent to text-sm */
    margin-top: 0;
    margin-bottom: 0;
}

#wise-footer > div > div > ul > li {
    color: #ccc; /* Equivalent to text-gray-400 */
    transition: color 0.2s;
}

#wise-footer > div > div > ul > li:hover {
    color: #fff; /* Equivalent to hover:text-white */
}

#wise-footer > div > div + div {
    margin-top: 3.5rem; /* Equivalent to pt-14 */
}

#wise-footer > div > div + div > ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.5rem;
    font-family: 'Lato', sans-serif;
    font-size: 0.75rem; /* Equivalent to text-xs */
    font-weight: normal; /* Equivalent to font-normal */
    font-style: normal; /* Equivalent to not-italic */
    line-height: normal; /* Equivalent to leading-normal */
    color: #fff; /* Equivalent to text-white */
}

#wise-footer > div > div + div > ul > li {
    opacity: 0.7; /* Equivalent to opacity-70 */
}

#wise-footer > div > div + div > ul > li + li::before {
    content: "|";
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}

#wise-footer > div > div + div > ul > li:last-child::before {
    content: none;
}

#wise-footer > div > div + div > ul > li:hover {
    opacity: 1; /* Equivalent to hover:opacity-100 */
}

#wise-footer > div > div + div > div {
    display: flex;
    align-items: center;
    gap: 1.5rem; /* Equivalent to gap-6 */
}

#wise-footer > div > div + div > div > button {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-family: 'Lato', sans-serif;
    font-size: 0.75rem; /* Equivalent to text-xs */
    color: rgba(255, 255, 255, 0.5); /* Equivalent to text-white/50 */
}

#wise-footer > div > div + div > div > button > img {
    width: 1.875rem; /* Equivalent to width-6 */
    height: 1.875rem; /* Equivalent to height-6 */
}

#wise-footer > div + div {
    width: 100%;
    background-color: #fff;
    max-width: 1440px;
    margin-left: auto;
    margin-right: auto;
}

#wise-footer > div + div > div {
    display: flex;
    flex-direction: column;
    gap: 2rem; /* Equivalent to gap-8 */
}

#wise-footer > div + div > div > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 1.5rem; /* Equivalent to gap-6 */
}

#wise-footer > div + div > div > div > a > img {
    width: 2.5rem; /* Equivalent to width-10 */
    height: 2.5rem; /* Equivalent to height-10 */
}

#wise-footer > div + div > div > p {
    font-family: 'Lato', sans-serif;
    font-size: 0.875rem; /* Equivalent to text-base */
    line-height: 1.5rem; /* Equivalent to leading-6 */
    color: #6B7280; /* Equivalent to text-[#6B7280] */
}

.wise-footer-form-div{
    display: flex;
    border-bottom: 2px solid black;
    input{
        border: none;
   
    background: transparent;
    }
    button{
        border: none;
        background: transparent;
        gap: 5px;
        color: #019F44;
    }

}

#wise-footer > div + div > form > input {
    width: calc(100% - 40px);
    outline: none;
    border: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.75rem; /* Equivalent to text-xs */
}

#wise-footer > div + div > form > button {
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

#wise-footer > div + div > form > button > p {
    text-transform: uppercase;
    font-family: 'Lato', sans-serif;
    font-size: 0.75rem; /* Equivalent to text-xs */
    letter-spacing: 1px; /* Equivalent to tracking-[1px] */
    color: #019F44; /* Equivalent to text-[#019F44] */
    font-weight: 600; /* Equivalent to font-semibold */
}

#wise-footer > div + div > form > button > img {
    width: 1rem; /* Equivalent to width-4 */
    height: 0.875rem; /* Equivalent to height-3.5 */
}
.wise-footer-inner{
    display: flex;
    width: 100%;
    justify-content: space-between;
}
.wise-footer-link{
    display: flex;
    align-items: center;
    gap: 20px;
}

.wise-footer-list-link{
    list-style: none;
    a{
        text-decoration: none;
       color: #6B7280;
    }
}
.wise-footer-ul{
    display: flex;
    gap: 10px;
}
.wise-footer-second-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}
.wise-footer-bottom-link{
    display: flex;
    align-items: center;
    gap: 10px;
    color: #6B7280;
    padding: 0 !important;
    >li {
        list-style: none;
    >a{
        text-decoration: none;
        color: #6B7280;
    }
}
}
.wise-industry-button{
    border: none;
    background: transparent;
    display: flex;
    align-items: center;
    gap: 5px;
    color: #6B7280;
}
.wise-footer-bottom-first{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;

    >h4 {
    font-family: Montserrat;
    font-size: 22px;
    line-height: 32px;
    font-weight: 600; /* Equivalent to font-semibold */
    color: #000000; /* Equivalent to text-black */
}
.wise-footer-social-icon{
    width: 20px;
    height: 20px;
}

@media (min-width: 1024px) {
    >h4 {
        font-size: 28px;
        line-height: 39px;
    }
}
}
.wise-footer-social-icon-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem; /* Equivalent to gap-4 */
}

@media (min-width: 1024px) {
    .wise-footer-social-icon-container {
        gap: 1.5rem; /* Equivalent to lg:gap-6 */
    }
}
.wise-footer-bottom-second-div{
    display: flex;
    align-items: flex-end;
    gap: 20px;
}

</style>
<div id="wise-footer">
    <div >
        <div>
            <div class="wise-footer-inner">
                <img src="<?php echo $logo['url']; ?>" width="216" height="48"/>
                <ul class="wise-footer-ul">
                    <?php foreach ($listData as $data): ?>
                        <li class="wise-footer-list-link">
                            <a aria-label="About" href="<?php echo $data['link']; ?>"><?php echo $data['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="wise-footer-second-container">
                <ul class="wise-footer-bottom-link">
                    <li class="opacity-70"><?php echo $copyright; ?></li>|
                    <li>
                        <a aria-label="Privacy Policy" href="/privacy-policy" class="opacity-70 hover:opacity-100">
                            <?php echo $privacypolicy; ?>
                        </a>
                    </li>
                </ul>

                <div 
                    <div>
                        <button aria-label="showDropeDown" title="showDropeDown" aria-labelledby="showDropeDown" class="wise-industry-button">
                            WISE Industries
                            <img src="<?php echo $iconData[0]['icon']['url']; ?>" width="30" height="30" class="transition ease-in-out duration-300"/>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="wise-footer-bottom-second-div">
            <div>
                <div class="wise-footer-bottom-first">
                    <h4>
                        Stay Connected to Stay Ahead of the Competition
                    </h4>
                    <div class="wise-footer-social-icon-container6">
                        <a aria-label="facebook-icon" href="https://www.facebook.com/WISEDigitalPartners/" class="group/facebook">
                            <img src="<?php echo $iconData[1]['icon']['url']; ?>" class="wise-footer-social-icon"/>
                        </a>
                        <a aria-label="linkedIn-icon" href="https://www.linkedin.com/company/wise-digital-partners" class="group/linkedin">
                            <img src="<?php echo $iconData[2]['icon']['url']; ?>" class="wise-footer-social-icon"/>
                        </a>
                        <a aria-label="youtube-icon" href="https://www.youtube.com/channel/UCRTL3NSOIEuNyuUPzFgSyiA" class="group/youtube">
                            <img src="<?php echo $iconData[3]['icon']['url']; ?>" class="wise-footer-social-icon"/>
                        </a>
                        <a aria-label="instagram-icon" href="https://www.instagram.com/wisedigitalpartners/" class="group/instagram">
                            <img src="<?php echo $iconData[4]['icon']['url']; ?>" class="wise-footer-social-icon"/>
                        </a>
                        <a aria-label="yelp-icon-footer" href="https://www.yelp.com/biz/wise-digital-partners-san-diego-3" class="group/yelp">
                            <img src="<?php echo $iconData[5]['icon']['url']; ?>" class="wise-footer-social-icon"/>
                        </a>
                    </div>
                </div>

                <p>
                    Learn about new trends, innovative technologies, and how to get the most out of your digital marketing efforts by subscribing to our monthly newsletter.
                </p>
            </div>
            <form name="Subscribe to our newsletter" class="wise-footer-form-div">
                <input required type="email" placeholder="Enter your email here" class="outline-0"/>
                <button class="flex items-center justify-center gap-1">
                    <p class="uppercase font-lato tracking-[1px] text-sm leading-4 text-[#019F44] font-semibold">subscribe</p>
                    <img src="<?php echo $iconData[6]['icon']['url']; ?>" width="16" height="14"/>
                </button>
            </form>
        </div>
    </div>
</div>
</div>
                    </div>
