<a href="{{ route('user.profile.view', $item->id) }}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="View user's profile"><i class="fa fa-user"></i></a>

<a href="#" class="btn btn-icon btn-danger deleteDialog" data-toggle="tooltip" data-section="{{ route('users.destroy', $item->id) }}" role="button" data-original-title="Delete entry" >
    <i class="fa fa-trash"></i>
</a>