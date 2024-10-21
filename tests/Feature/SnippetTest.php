<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

use App\Models\Snippet;

class SnippetTest extends TestCase {

  use RefreshDatabase;

  /** @test */
  public function it_creates_a_snippet_with_valid_data()
  {
		// Prepare the data for the request
		$data = [
			'title'   => 'Test Snippet',
			'content' => 'This is the content of the snippet.',
			'note'    => 'A note about the snippet.',
			'tags'    => 'php laravel,testing'
			];

		// Send a POST request to the store route
		$response = $this->post(route('snippets.store'), $data);

		// Assert the snippet was created in the database
		$this->assertDatabaseHas('snippets', [
			'title'   => $data['title'],
			'content' => $data['content'],
			'note'    => $data['note'],
		]);

		// Assert the response redirects to the expected route
		$response->assertRedirect(route('snippets.index'))
					 ->assertSessionHas('success', 'Snippet Creado exitosamente');

		// Retrieve the snippet from the database
		$snippet = Snippet::where('title', $data['title'])->first();

		// Check that the tags were processed correctly
		$this->assertNotNull($snippet);
		$this->assertEquals(['php', 'laravel', 'testing'], $snippet->tags->pluck('name')->toArray());

  }

}
