
 // Definition for a binary tree node.
struct TreeNode {
    int val;
    TreeNode *left;
    TreeNode *right;
    TreeNode() : val(0), left(nullptr), right(nullptr) {}
    TreeNode(int x) : val(x), left(nullptr), right(nullptr) {}
    TreeNode(int x, TreeNode *left, TreeNode *right) : val(x), left(left), right(right) {}
};
 
class Solution {
public:
    bool isSameTree(TreeNode* p, TreeNode* q) {
        // Both are empty : same
        if(!p && !q)
            return true;
        // One is empty 
        if(!p || !q)
            return false;
        // Both are non empty : compare root value
        if(p->val != q->val)
            return false;
        // Recursive calls for left and right subtree
        return isSameTree(p->left, q->left) && isSameTree(p->right, q->right);   
    }
};





