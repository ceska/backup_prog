import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BlogComponent } from './components/blog/blog.component';
import { BlogPostsComponent } from './components/blog-posts/blog-posts.component';
import { NotFoundComponent } from './components/not-found/not-found.component';

const routes: Routes = [
  { path: 'blog', component: BlogComponent },
  { path: 'post', component: BlogPostsComponent },
  { path: '',   redirectTo: '/blog', pathMatch: 'full' },
  { path: '**', component: NotFoundComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
