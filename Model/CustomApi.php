<?php
namespace Vendor\Module\Model;

/**
 * Custom Api Model.
 */
class CustomApi implements \Vendor\Module\Api\CustomApiInterface
{
    /**
     * @inheritDoc
     */
    public function getAllPosts(): array
    {
        return [
            [
                "id" => 1,
                "title" => "My Post 1",
                "categories" => ["my posts", "custom posts"],
                "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            ],
            [
                "id" => 2,
                "title" => __("My Post 2"),
                "categories" => ["my posts", "custom post2"],
                "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function getPost(int $id): array
    {
        $allposts = $this->getAllPosts();
        $post = [];
        foreach ($allposts as $item) {
            if ($id == $item['id']) {
                $post[] = $item;
                break;
            }
        }

        return $post;
    }
}
