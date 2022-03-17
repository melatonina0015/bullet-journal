const search = document.querySelector('input[placeholder="search post"]');
const projectContainer = document.querySelector(".posts");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (posts) {
            projectContainer.innerHTML = "";
            loadPosts(posts)
        });
    }
});

function loadPosts(posts) {
    posts.forEach(post => {
        console.log(post);
        createPost(post);
    });
}

function createPost(post) {
    const template = document.querySelector("#post-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = post.id;
    const image = clone.querySelector("img");
    image.src = `/public/uploads/${post.image}`;
    const title = clone.querySelector("h2");
    title.innerHTML = post.title;
    const description = clone.querySelector("p");
    description.innerHTML = post.description;

    projectContainer.appendChild(clone);
}
