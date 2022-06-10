<?php
namespace Vendor\Module\Api;

/**
 * Custom Api Interface
 */
interface CustomApiInterface
{
    /**
     * Get All Posts.
     *
     * @return array
     */
    public function getAllPosts(): array;

    /**
     * Get a post by id
     *
     * @param int $id
     * @return array
     */
    public function getPost(int $id): array;
}
