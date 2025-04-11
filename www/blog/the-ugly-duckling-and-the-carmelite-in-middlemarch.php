<?
$ebookIds = [415, 607];
$carousel = Db::Query('SELECT * from Ebooks where EbookId in ' . Db::CreateSetSql($ebookIds), $ebookIds, Ebook::class);
?>
<?= Template::Header(title: 'The Ugly Duckling and the Carmelite in Middlemarch', css: ['/css/blog.css']) ?>
<main>
	<section class="narrow blog">
		<nav class="breadcrumbs"><a href="/blog">Blog</a> →</nav>
		<h1>The Ugly Duckling and the Carmelite in <i>Middlemarch</i></h1>
		<p class="byline">By Erin Endrei</p>
		<?= Template::DonationCounter() ?>
		<?= Template::DonationProgress() ?>
		<div class="editors-note">
			<p>This article first appeared in the April 2025 edition of our <a href="/newsletter">email newsletter</a>.</p>
		</div>
		<p>The other ducklings in Hans Christian Andersen’s fairytale “<a href="https://archive.org/details/hansandersensfai01anderich/page/30/mode/2up">The Ugly Duckling</a>” might only be supporting characters in their ugly brother’s story, but this doesn’t stop them from voicing their opinions as soon as they hatch. “‘What a great world it is, to be sure,’ said the little ones, when they found how much more room they had than when they were in the eggshell.”</p>
		<p>As many of us learned as children, that platitude isn’t the ugly duckling’s destiny. His unusual appearance is initially pitied as ugliness, but in reality he’s a swan, and by the tale’s end has been exalted not only as belonging to the nobler of the two avian species, but as its most beautiful specimen.</p>
		<p>Is it strange that <i>Middlemarch</i>, the book <a href="https://gutenberg.net.au/ebooks03/0300031h.html#C14">famously lauded</a> by <a href="/ebooks/virginia-woolf">Virginia Woolf</a> as “one of the few English novels written for grown-up people,” ends its short prelude with a reference to a fairytale?</p>
		<p>Maybe not, because in George Eliot’s allusion, the cygnet meets a different fate; sometimes, Eliot ominously announces, a cygnet reared among ducklings <em>never</em> finds the fellowship of its own kind. With this declaration, the prelude spoils the resolution of at least one of the novel’s narrative threads: expect no fairytale ending for whomever turns out to be the cygnet.</p>
		<p>The best candidate for so corresponding is a well-heeled, idealistic young woman of the English midlands named Dorothea, who also instantiates the prelude’s primary image, the “new Theresa.” We’ll arrive at that metaphor shortly, via a brief background detour.</p>
		<p><i>Middlemarch</i> is set in the early 1830s, around four decades before its first installment was published. Through its meticulous representations of both private and public English life—of debates about <a href="https://en.wikipedia.org/wiki/Reform_Act_1832">men’s franchise</a> and developments in medicine alongside personal questions of marriage and individual vocation—the novel traces the trajectory of the previous generation along each of its major dimensions: mores, politics, and science.</p>
		<p>Discussions of women’s status were also intensifying in England as Eliot wrote the novel. The Mills’ treatise <a href="/ebooks/john-stuart-mill/the-subjection-of-women"><i>The Subjection of Women</i></a> had appeared in 1869, and the first <a href="https://en.wikipedia.org/wiki/Married_Women%27s_Property_Act_1870">Married Women’s Property Act</a> was passed in 1870. This is relevant both to the prelude’s reference to the “indefiniteness” of women’s natures and incompetencies, and to later scenes of the narrative. But Eliot held back from the women’s rights movement, and as we’ve described, <i>Middlemarch</i> has more general historical aims.</p>
		<p>Henry Wadsworth Longfellow’s poem, “<a href="https://en.m.wikipedia.org/wiki/A_Psalm_of_Life">A Psalm of Life</a>” was published a few years too late to figure in <i>Middlemarch</i>; but given its enormous popularity since its appearance in 1838, it seems to me helpful to compare it with Eliot’s prelude. Jauntily, Longfellow declares: “Lives of great men all remind us / We can make our lives sublime.” He enjoins his reader to emulate them: “Be a hero in the strife!”</p>
		<p>A quick way of understanding <i>Middlemarch</i>’s prelude is as a counter to such optimism—or at least to its feasibility for all. In this story, the prelude suggests, some strange-looking ducklings might remain among their adoptive siblings. In so doing they might end up looking less like noble heroes than members of a herd: in the poem’s injurious simile, “dumb, driven cattle.”</p>
		<p>If we press on in Longfellow’s poem, we reach the famous “footprints on the sands of time,” bringing us also, as promised, to the primary metaphor of <i>Middlemarch</i>’s prelude: the “new Theresas.”</p>
		<p>“Theresa” refers to Teresa of Ávila, a sixteenth-century Spanish nun who instigated reforms returning the religious observances of the Carmelite Order to their original austerity. She reimposed strict cloistering, silent contemplation, and a more absolute poverty—the latter reflected in the name of her reformed order, the Discalced (“unshod”) Carmelites. While prevented from martyring herself as a seven-year-old, Teresa eventually found—in both her reforming leadership and later her composition of spiritual texts—a channel for her ardor, for her enthusiastic desire to make a mark on the world for some greater good.</p>
		<p>But, Eliot implies in the prelude, women of similarly ardent temperament born in the early nineteenth century are as likely to be thwarted by the obstacle of “domestic reality” as Teresa was as a child. The energy of these later-born women has as little use for their surroundings as Teresa’s had for sixteenth-century Catholicism, so their energy won’t be directed towards any historic end, but will be “dispersed amongst hindrances,” leaving no mark. Such women, “new Theresas,” will not become “heroines in the strife,” whose relics might hearten forlorn and shipwrecked siblings.</p>
		<p>Both of the prelude’s main images—the lost cygnet and the new Theresas—conflict with optimism in Longfellow’s poem. Is that part of what makes <i>Middlemarch</i> a mature book, as Woolf put it? A book for “grown-up” people?</p>
		<p>I’d say so. But the book’s maturity might also involve something more subtle, namely a gradual erosion of the confidence with which we sort its characters and one another into “kinds”: cygnets and ducklings, Theresas and unnamed brothers of Theresas, heroes and cattle.</p>
		<p>The erosion begins not long after the prelude. Famously, from the perspective of Dorothea’s first suitor, the minds of men and women are described in terms of different species of trees.</p>
		<blockquote>
			<p>A man’s mind—what there is of it—has always the advantage of being masculine—as the smallest birch-tree is of a higher kind than the most soaring palm—and even his ignorance is of a sounder quality.</p>
		</blockquote>
		<p>We’re not supposed to conclude that this metaphor is just; Eliot’s careful statement looks rather like a labor performed alongside the sharpening of skewers. But if we look askance at the birch and palms, is it consistent to accept uncritically the ducklings and cygnets? The more clearly ironical use of the former metaphor might cast doubt upon the intended function of the latter one—and upon also various practices of classifying people, if only metaphorically, into “types” and “kinds.”</p>
		<p>“For we all of us,” Eliot says later in the book, “grave or light, get our thoughts <em>entangled</em> in metaphors, and act <em>fatally</em> on the strength of them.” (Emphasis added.)</p>
		<p>We’ll indeed need to read beyond the prelude to arrive at an opinion about whether my concluding thought, concerning erosion, is correct. More than the prelude is also necessary, to be sure, to see what a great and ambiguous book it is—but the prelude alone does provide as strong a hint as it’s possible to make, in less than five hundred words, of the novel’s realism, humor, and also beauty.</p>
		<h2 id="ebooks-in-this-newsletter">Free ebooks in this post</h2>
		<?= Template::EbookCarousel(carousel: $carousel) ?>
	</section>
</main>
<?= Template::Footer() ?>
