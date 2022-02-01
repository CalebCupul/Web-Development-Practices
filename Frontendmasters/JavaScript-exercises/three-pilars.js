class Bookshelf {
	constructor() {
		this.favoriteBooks = [];
	}

	addFavoriteBook(bookName){
		if (!bookName.includes("Great")) {
			this.favoriteBooks.push(bookName);
		}
	}

	printFavoriteBooks(){
		console.log(`Favorite Books: ${String(this.favoriteBooks.length)}`);
	for (let bookName of this.favoriteBooks) {
		console.log(bookName);
	}
	}
}

function loadBooks(myBookShelf) {
	fakeAjax(BOOK_API, function myBooks(bookNames){
		for(let bookName of bookNames ){
			myBookShelf.addFavoriteBook(bookName);
		}
		myBookShelf.printFavoriteBooks();

	});
}

var BOOK_API = "https://some.url/api";

var myBookShelf = new Bookshelf();
loadBooks(myBookShelf);

function fakeAjax(url,cb) {
	setTimeout(function fakeLoadingDelay(){
		cb([
			"A Song of Ice and Fire",
			"The Great Gatsby",
			"Crime & Punishment",
			"Great Expectations",
			"You Don't Know JS"
		]);
	},500);
}
