<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Note
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $content
 * @property int|null $user_id
 * @property int $notable_id
 * @property string $notable_type
 * @property-read \App\User|null $author
 * @property-read mixed $excerpt
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $notable
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereNotableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereNotableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Note whereUserId($value)
 */
	class Note extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_admin
 * @property-read \App\Lector $lector
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Note[] $notes
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Lesson
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon $starts_at
 * @property \Illuminate\Support\Carbon $ends_at
 * @property int $classroom_id
 * @property-read \App\Classroom $classroom
 * @property-read mixed $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Note[] $notes
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereClassroomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereUpdatedAt($value)
 */
	class Lesson extends \Eloquent {}
}

namespace App{
/**
 * App\Student
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $address
 * @property string|null $school
 * @property string|null $hobbies
 * @property string|null $origin
 * @property string|null $parent_name
 * @property string|null $parent_phone
 * @property \Illuminate\Support\Carbon|null $birth_date
 * @property int|null $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @property-read int|null $courses_count
 * @property-read mixed $full_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lesson[] $lessons
 * @property-read int|null $lessons_count
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereHobbies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereParentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereParentPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereSchool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUserId($value)
 */
	class Student extends \Eloquent {}
}

namespace App{
/**
 * App\Course
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property float|null $price
 * @property string|null $archived_at
 * @property \Illuminate\Support\Carbon|null $starts_at
 * @property \Illuminate\Support\Carbon|null $ends_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Classroom[] $classrooms
 * @property-read int|null $classrooms_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lector[] $lectors
 * @property-read int|null $lectors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lesson[] $lessons
 * @property-read int|null $lessons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereArchivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereUpdatedAt($value)
 */
	class Course extends \Eloquent {}
}

namespace App{
/**
 * App\Lector
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $address
 * @property string|null $past_experience
 * @property string|null $teaches_subjects
 * @property string|null $available_days
 * @property \Illuminate\Support\Carbon|null $birth_date
 * @property int|null $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @property-read int|null $courses_count
 * @property-read mixed $full_name
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereAvailableDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector wherePastExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereTeachesSubjects($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lector whereUserId($value)
 */
	class Lector extends \Eloquent {}
}

namespace App{
/**
 * App\Classroom
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon $starts_at
 * @property int $duration_minutes
 * @property int $frequency_days
 * @property int $course_id
 * @property-read \App\Course $course
 * @property-read mixed $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lesson[] $lessons
 * @property-read int|null $lessons_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereFrequencyDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Classroom whereUpdatedAt($value)
 */
	class Classroom extends \Eloquent {}
}

