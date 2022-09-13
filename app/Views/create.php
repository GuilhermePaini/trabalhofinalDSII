<body>
 
    <form action="/news/create" method="post">
        <label for="title">Title</label>
        <input type="input" name="title" /><br />

        <label for="body">Text</label>
        <textarea name="body" cols="45" rows="4"></textarea><br />

        <input type="submit" name="submit" value="Create news item" />
    </form>
</body>