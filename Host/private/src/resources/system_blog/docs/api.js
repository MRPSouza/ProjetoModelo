/**
 * API DOCUMENTATION
 * ================
 * Last updated: 2024-03-21
 * 
 * INTERFACES
 * ---------
 * interface Post {
 *   id: number
 *   title: string
 *   title_styles: {
 *     bold?: boolean
 *     italic?: boolean
 *     underline?: boolean
 *     color?: string
 *   }
 *   slug: string
 *   description: string
 *   content: string
 *   content_styles: Array<{
 *     type: 'bold' | 'italic' | 'underline' | 'color'
 *     start: number
 *     end: number
 *     value?: string
 *   }>
 *   status: PostStatus
 *   scheduled_for?: string
 *   created_at: string
 *   updated_at: string
 *   views: number
 *   author: string
 *   tags: string[]
 * }
 * 
 * type PostStatus = 
 *   | 'published'    // Initial
 *   | 'pending'      // Future
 *   | 'scheduled'    // Future
 *   | 'draft'        // Future
 *   | 'main'         // Future
 *   | 'partners'     // Future
 *   | 'all'         // Future
 * 
 * COMPONENTS
 * ---------
 * DevMenu {
 *   sections: {
 *     public: Array<MenuItem>
 *     admin: Array<MenuItem>
 *     docs: Array<MenuItem>
 *   }
 *   styles: {
 *     animations: boolean
 *     position: 'bottom-right'
 *     theme: 'light' | 'dark'
 *   }
 * }
 * 
 * interface MenuItem {
 *   label: string
 *   icon: string
 *   path: string
 *   section: 'public' | 'admin' | 'docs'
 * }
 */ 