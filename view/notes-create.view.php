<?php require("partials/header.php");?>
    <?php require("partials/nav.php");?> 
    <?php require("partials/banner.php");?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <form method="post">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" require>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" require>
                <label for="content">Content</label>
                <textarea name="my_content" id="content" require></textarea>
                <input type="submit" value="Submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            </form>
        </div>
    </main>
<?php require("partials/footer.php");?>