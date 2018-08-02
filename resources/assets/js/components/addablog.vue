<template>
<div id="add-blog">
  <h2>Add a New Blog Post</h2>
  <form v-if="!submitted">
    <label>Blog Title:</label>
    <input type="text" v-model.lazy="blog.title" required />
    <label>Blog Content:</label>
    <textarea v-model.lazy.trim="blog.content"></textarea>
    <div id="checkboxes">
      <label>Music</label>
      <input type="checkbox" value="music" v-model="blog.categories">
      <label>Art</label>
      <input type="checkbox" value="art" v-model="blog.categories">
      <label>Places</label>
      <input type="checkbox" value="places" v-model="blog.categories">
      <label>Eat and Drink</label>
      <input type="checkbox" value="eatDrink" v-model="blog.categories">
      <label>Local Business</label>
      <input type="checkbox" value="localBusiness" v-model="blog.categories">
    </div>
    <label>Author</label>
    <select v-model="blog.author">
      <option v-for="author in authors">{{ author }}</option>
    </select>
    <button v-on:click.prevent="post">Add Blog</button>
  </form>
  <div v-if="submitted">
    <h3>Thanks for adding your post</h3>
  </div>
  <div id="preview">
    <h3>Preview blog</h3>
    <p>Blog title: {{ blog.title }}</p>
    <p>Blog content:</p>
    <p style="white-space: wrap">{{ blog.content }}</p>
    <p>Blog Categories</p>
    <ul>
      <li v-for="category in blog.categories">{{ category }}</li>
    </ul>
    <p>Author: {{ blog.author }}</p>
  </div>
</div>
</template>

<script>
// Imports
export default {
  data() {
    return {
      blog: {
        title: "",
        content: "",
        categories: [],
        author: ""
      },
      authors: ["Jim", "Sally", "George"],
      submitted: false,
    }
  },
  methods: {
    post: function(){
      this.$http.post("https://blog-vuejs-tutorial.firebaseio.com/posts.json", this.blog).then(function(data){
        console.log(data);
        this.submitted = true;
      });
    }
  }
}
</script>

</script>

<style scoped>
#add-blog *{
    box-sizing: border-box;
}
#add-blog{
    margin: 20px auto;
    max-width: 600px;
    padding: 20px;
}
label{
    display: block;
    margin: 20px 0 10px;
}
input[type="text"], textarea, select{
    display: block;
    width: 100%;
    padding: 8px;
}
textarea{
    height:200px;
}
#preview{
    padding: 10px 20px;
    border: 1px dotted #ccc;
    margin: 30px 0;
}
h3{
    margin-top: 10px;
}
#checkboxes input{
    display: inline-block;
    margin-right: 10px;
}
#checkboxes label{
    display: inline-block;
    margin-top: 0;
}
hr{
    display: none;
}
button{
    display: block;
    margin: 20px 0;
    background: crimson;
    color: #fff;
    border: 0;
    padding: 14px;
    border-radius: 4px;
    font-size: 18px;
    cursor: pointer;
}
</style>
