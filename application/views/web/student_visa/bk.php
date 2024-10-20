<style>
    hr {
        border: 0;
        border-bottom: 0.0625rem solid #bbb;
        margin: 3rem 0;
    }
    button {
        font-size: 22px;
        background: #3498db;
        color: #fff;
        border: 2px solid #FFFFFF;
        padding: 10px 14px;
        margin: 24px;
        margin-top: 32px;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    button:hover {
        color: #3498db;
    }
    button::after {
        content: "";
        background: #ecf0f1;
        position: absolute;
        z-index: -1;
        padding: 0.85em 0.75em;
        display: block;
    }
    button[class^="slide"]::after {
        transition: all 0.35s;
    }
    button[class^="slide"]:hover::after {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        transition: all 0.35s;
    }
    button.slide_from_left::after {
        top: 0;
        bottom: 0;
        left: -100%;
        right: 100%;
    }
    button.slide_from_right::after {
        top: 0;
        bottom: 0;
        left: 100%;
        right: -100%;
    }
    button.slide_from_top::after {
        left: 0;
        right: 0;
        top: -100%;
        bottom: 100%;
    }
    button.slide_from_bottom::after {
        left: 0;
        right: 0;
        top: 100%;
        bottom: -100%;
    }
    button[class^="grow"]::after {
        transition: all 0.3s ease;
    }
    button[class^="grow"]:hover::after {
        transition: all 0.3s ease-out;
    }
    button.grow_box::after {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        transform: scale(0, 0);
    }
    button.grow_box:hover::after {
        transform: scale(1, 1);
    }
    button.grow_ellipse::after {
        border-radius: 50%;
        left: -50%;
        right: -50%;
        top: -150%;
        bottom: -150%;
        line-height: 8.34em;
        transform: scale(0, 0);
    }
    button.grow_ellipse:hover::after {
        transform: scale(1, 1);
    }
    button.grow_skew_forward::after {
        left: -20%;
        right: -20%;
        top: 0;
        bottom: 0;
        transform: skewX(-45deg) scale(0, 1);
    }
    button.grow_skew_forward:hover::after {
        transform: skewX(-45deg) scale(1, 1);
    }
    button.grow_skew_backward::after {
        left: -20%;
        right: -20%;
        top: 0;
        bottom: 0;
        transform: skewX(45deg) scale(0, 1);
    }
    button.grow_skew_backward:hover::after {
        transform: skewX(45deg) scale(1, 1);
    }
    button.grow_spin::after {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        transform: scale(0, 0) rotate(-180deg);
    }
    button.grow_spin:hover::after {
        transform: scale(1, 1) rotate(0deg);
    }
</style>