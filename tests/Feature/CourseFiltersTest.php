<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lang;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseFiltersTest extends TestCase
{
    /** @test */
    public function test_with_filters_course_query_by_lang_and_categories()
    {
        // Category::factory(20)->create();
        // Lang::factory(2)->create();

        $categories[] = Category::inRandomOrder()->first()->id;
        $categories[] = Category::inRandomOrder()->first()->id;
        $categories[] = Category::inRandomOrder()->first()->id;

        $langs[] = Lang::inRandomOrder()->first()->id;
        $langs[] = Lang::inRandomOrder()->first()->id;

        $course = Course::query()
            ->withFilters(
                $categories,
                $langs,
            )
            ->first();

        $this->assertInstanceOf(Course::class, $course);
    }
}
