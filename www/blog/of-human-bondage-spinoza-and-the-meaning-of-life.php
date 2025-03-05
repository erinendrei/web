<?
$ebookIds = [981, 561, 833];
$carousel = Db::Query('SELECT * from Ebooks where EbookId in ' . Db::CreateSetSql($ebookIds), $ebookIds, Ebook::class);
?>
<?= Template::Header(title: 'Of Human Bondage, Spinoza, and the Meaning of Life', css: ['/css/blog.css']) ?>
<main>
	<section class="narrow blog">
		<nav class="breadcrumbs"><a href="/blog">Blog</a> →</nav>
		<h1><i>Of Human Bondage</i>, Spinoza, and the Meaning of Life</h1>
		<p class="byline">By Erin Endrei</p>
		<?= Template::DonationCounter() ?>
		<?= Template::DonationProgress() ?>
		<div class="editors-note">
			<p>This article first appeared in the March 2025 edition of our <a href="/newsletter">email newsletter</a>.</p>
		</div>
		<p>The creation story of W. Somerset Maugham’s book <a href="https://standardebooks.org/ebooks/w-somerset-maugham/of-human-bondage"><i>Of Human Bondage</i></a> has, at least superficially, to do with Spinoza’s <i>Ethics</i>, from <a href="https://www.gutenberg.org/cache/epub/3800/pg3800-images.html#chap04">which its title was drawn</a>. But it also has a deeper connection to Spinoza: “remedies against the emotions” occupy the fifth part of Spinoza’s difficult work, and Maugham wrote his novel as a sort of remedy against his own emotions. This connection reveals some fascinating ways in which Maugham agrees with Spinoza, and some ways in which he doesn’t.</p>
		<p>By his late thirties Maugham had become a successful playwright, but the memories of his youth tormented and obsessed him, as he recounts in a later preface to the novel and an autobiographical work, <i>The Summing Up</i>. He quit his well-paying job at a theater to produce a novel from these memories, a draft of which he’d begun years before, in which the protagonist’s name was, <a href="https://standardebooks.org/ebooks/james-joyce/a-portrait-of-the-artist-as-a-young-man">coincidentally, Stephen.</a></p>
		<p>After the novel was published in 1915 as <i>Of Human Bondage</i> (with the protagonist renamed Philip), Maugham begin receiving a considerable amount of fan mail, against his expectations that the world was suffering too much to bother with it.</p>
		<p>But the book’s reception didn’t really matter to him; what mattered was that its publication succeeded in liberating him from his “unhappy recollections.”</p>
		<p>Part IV of Spinoza’s <i>Ethics</i> begins by suggesting that freedom requires moderating emotion by reason; if people don’t do that well enough, they may pursue things that they know will harm them. Various characters in <i>Of Human Bondage</i> illustrate this danger, but most the most obvious example is Philip’s tortuous obsession with a waitress who mistreats him. Unbridled impulse leads to disaster for Philip; controlling his desires, like <a href="https://standardebooks.org/ebooks/plato/dialogues/benjamin-jowett/text/phaedrus">reining in an unruly horse</a>, is a struggle. Spinoza appreciated the difficulty of implementing his solutions, <a href="https://www.gutenberg.org/cache/epub/3800/pg3800-images.html#chap05">criticizing Descartes</a> for implying that human beings could have “absolute dominion” over the passions.</p>
		<p>Another way in which the novel accords with the <i>Ethics</i> is in assuming some relation between human freedom and knowing the truth. This appears notably in the <i>Ethics</i> as the concept of the “intellectual love of God.” In the novel, Philip abandons Christian theism—given Spinoza’s understanding of deity, this is consistent with the <i>Ethics</i>—but it’s striking that the first time Philip reports feeling utterly free is when he thinks he has just arrived at the truth about a question that has occupied him throughout the book: the question of the meaning of life.</p>
		<p>Whatever our attitude may be to that question, it brings us to two points of difference between the novel and the philosophy that is its namesake.</p>
		<p>The first is how in <i>Of Human Bondage</i> freedom diverges from wisdom. It’s a failed poet, Cronshaw, who leads Philip to this ultimate wisdom, the meaning of life; it’s also on Cronshaw’s advice that Philip makes some of his few good decisions. But Cronshaw is nothing if not a slave to the passions, and therefore he’s not, in respects that count most to Spinoza, <em>free</em>. In the novel’s world the “wise man” and “free man” are not always the same person; in Spinoza’s <i>Ethics</i>, they <em>must</em> be.</p>
		<p>The second, more fundamental way in which the novel parts ways from the <i>Ethics</i> is in the former’s explicit ethical relativism. Philip is able to find out the truth about the meaning of life; but he concludes that there’s no such thing as <em>the</em> truth about <i>Ethics</i>. Systems of ethics, Philip comes to think, describe only their author and the author’s personality; if the author claims that their system is universally applicable, then that’s just a detail of the author’s own self-portrait. As Philip puts it during a discussion with an evangelizer of the <a href="https://en.wikipedia.org/wiki/Categorical_imperative">categorical imperative</a>: “Kant thought things not because they were true, but because he was Kant.”</p>
		<p>To see why this presents a conflict with Spinoza’s <i>Ethics</i>, consider what sort of writing has the best chance of <em>failing</em> to reflect the writer’s personality. Surely mathematical writing fits the bill. But that’s what Euclid’s <i>Elements</i> is—and the <i>Elements</i> was the model for Spinoza’s <i>Ethics</i>, whose subtitle translates to: “Demonstrated in Geometrical Order.”</p>
		<p>Merely adopting a geometrical structure for his <i>Ethics</i>—as he’d done before in his book-length <a href="https://en.wikipedia.org/wiki/Principia_philosophiae_cartesianae">exposition of Descartes’ philosophy</a>—doesn’t, as <a href="https://www.jstor.org/stable/27900961">A. P. Snow argued over a century ago</a>, commit Spinoza to thinking that ethics has the certainty of geometry. It <em>does</em> appear to commit him to thinking that ethics can be taught, and taught not just by him, but by anyone, because it can be explained impartially.</p>
		<p>This is rejected in <i>Of Human Bondage</i>. In mathematics, a proof is sound or unsound independently of who writes it down; but in ethics, according to Philip, a system is “valid only for the writer.” As Philip concludes after reading his way through the history of philosophy: “It looked as though you did not act in a certain way because you thought in a certain way, but rather that you thought in a certain way because you were made in a certain way. Truth had nothing to do with it.”</p>
		<p>Both of these departures from the <i>Ethics</i> reinforce the same question: what kind of relations hold between concepts we’d consider ethical, like freedom, <a href="https://standardebooks.org/ebooks/plato/dialogues/benjamin-jowett/text/laches">courage</a>, and <a href="https://standardebooks.org/ebooks/plato/dialogues/benjamin-jowett/text/charmides">temperance</a>, and those we’d consider theoretical, like truth, knowledge, and understanding?</p>
		<p>Maugham’s answer has to do with art; but like the significance of the piece of carpet in the novel, that answer is better pieced together yourself—and the question itself may not even seem sensible to everyone.</p>
		<h2 id="ebooks-in-this-newsletter">Free ebooks in this post</h2>
		<?= Template::EbookCarousel(carousel: $carousel) ?>
	</section>
</main>
<?= Template::Footer() ?>
