export interface UserProps {
	id: bigint;
	name: string;
	email: string;
	email_verified_at: Date;
	password: string;
	remember_token: string;
	created_at: Date;
	updated_at: Date;
}
