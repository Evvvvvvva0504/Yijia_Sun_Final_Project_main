function addComment() {

    // obtain the value of comment-input
    const commentInput = document.getElementById("comment-input").value;

    // examine whether the comment input is empty or not
    if (!commentInput) {
        alert("Please enter the comment.");
        return;
    }

    // obtain the comments container 评论容器
    const commentsContainer = document.querySelector(".comments");

    // obtain the collection of existing comment element
    const comments = commentsContainer.querySelectorAll(".comment");

    // remove the last comment if there are already 3 comments
    if (comments.length >= 3) {
        commentsContainer.removeChild(comments[comments.length - 1]);
    }

    // create a new comment element ("comment" = "user-picture" + "comment-content-date")
    const newComment = document.createElement("div");
    newComment.className = "comment";

    // create user-picture element under the new comment (class = "user-picture")
    const newUserPicture = document.createElement("div");
    newUserPicture.className = "user-picture";

    const userPictureImg = document.createElement("img");
    userPictureImg.setAttribute("src", "assets/user.jpg");
    userPictureImg.setAttribute("alt", "The user profile picture placeholder");

    newUserPicture.appendChild(userPictureImg);
    newComment.appendChild(newUserPicture);

    // create comment-content-date element under the new comment (class="comment-content-date")
    const newCommentContentAndDate = document.createElement("div");
    newCommentContentAndDate.className = "comment-content-date";

    // create comment-content element 
    const newCommentContent = document.createElement("div");
    newCommentContent.className = "comment-content";
    newCommentContent.textContent = commentInput;

    newCommentContentAndDate.appendChild(newCommentContent);

    // create comment-date element 
    const newCommentDate = document.createElement("div");
    newCommentDate.className = "comment-date";

    const currentDate = new Date();
    newCommentDate.textContent = currentDate.toLocaleString();

    newCommentContentAndDate.appendChild(newCommentDate);

    newComment.appendChild(newCommentContentAndDate);

    // insert the new comment at the beginning of the commentsContainer
    commentsContainer.insertBefore(newComment, commentsContainer.firstChild);

    // clear the input field
    document.getElementById("comment-input").value = "";
}
