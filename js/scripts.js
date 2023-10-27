// Defining all pictures for all slideshows
let row_2_col_2_imageUrls = [
    "../images/row-2-col-2-background-1.webp",
    "../images/row-2-col-2-background-2.webp",
    "../images/row-2-col-2-background-3.webp",
    "../images/row-2-col-2-background-4.webp",
    "../images/row-2-col-2-background-5.webp",
];
let row_5_col_1_imageUrls = [
    "../images/row-5-col-1-background-1.webp",
    "../images/row-5-col-1-background-2.webp",
    "../images/row-5-col-1-background-3.webp",
    "../images/row-5-col-1-background-4.webp",
];

// Defining all slideshows with id's
let row_2_col_2_slideshow = document.getElementById("row-2-col-2-slideshow");
let row_5_col_1_slideshow = document.getElementById("row-5-col-1-slideshow");

// Set initial indexes to 0
let currentIndex_row_2 = 0;
let currentIndex_row_5 = 0;

// Function to change background images for all slideshows
function changeBackground() {
    row_2_col_2_slideshow.style.opacity = 0; // Start fading out
    row_5_col_1_slideshow.style.opacity = 0; // Start fading out

    setTimeout(() => {
        row_2_col_2_slideshow.style.backgroundImage = "url('" + row_2_col_2_imageUrls[currentIndex_row_2] + "')";
        row_5_col_1_slideshow.style.backgroundImage = "url('" + row_5_col_1_imageUrls[currentIndex_row_5] + "')";

        currentIndex_row_2 = (currentIndex_row_2 + 1) % row_2_col_2_imageUrls.length;
        currentIndex_row_5 = (currentIndex_row_5 + 1) % row_5_col_1_imageUrls.length;

        setTimeout(() => {
            row_2_col_2_slideshow.style.opacity = 1; // Fade in with new image
            row_5_col_1_slideshow.style.opacity = 1; // Fade in with new image

        }, 200); // Shorter delay before fading in
    }, 200); // Shorter delay before changing the image
}

setInterval(changeBackground, 4000);

// Initial background
changeBackground();
