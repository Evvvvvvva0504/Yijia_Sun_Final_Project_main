function addPost() {

    // examinate whether the title and content input is empty or not

    const titleInput = document.getElementById("title-input").value;
    const contentInput = document.getElementById("content-input").value;
    
    if (! titleInput) {
        alert("Please enter the title.");
        return;
    }
    if (! contentInput) {
        alert("Please enter the content.");
        return;
    }

    // add new post to the recently posted area

    const recentlyPosted = document.getElementById("recently-posted");
    const posts = recentlyPosted.getElementsByClassName("post");

    // remove the last post if there are already 4 posts
    if (posts.length >= 4) {
        recentlyPosted.removeChild(posts[posts.length - 1]);
    }

    // create a new post element ("post" = "post-title" + "date")
    const newPost = document.createElement("div");
    newPost.className = "post";

    // create post-title element under div (class = "post")

        // set up a div (class = "post-title") 
    const newPostTitle = document.createElement("div");
    newPostTitle.className = "post-title";

        // create link element and set up the content
    const linkElement = document.createElement("a");
    linkElement.href = "#newPost";
    linkElement.textContent = titleInput;
    
        // append link element to div (class = "post-title")
    newPostTitle.appendChild(linkElement);

        // append newPostTitle to newPost (div (class = "post"))
    newPost.appendChild(newPostTitle);
    
    // create date element under div (class = "post")

        // set up a div (class = "date")
    const newDate = document.createElement("div");
    newDate.className = "date";

        // get the current date and time
    const currentDate = new Date();
    newDate.textContent = currentDate.toLocaleString();

        // append newDate to newPost (div (class = "post"))
    newPost.appendChild(newDate);

    // insert the new post at the beginning
    recentlyPosted.insertBefore(newPost, recentlyPosted.firstChild);

    // clear the input field
    document.getElementById("title-input").value = "";
    document.getElementById("content-input").value = "";
}